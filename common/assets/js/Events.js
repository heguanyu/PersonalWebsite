/**
 * Created by Guanyu on 8/30/2014.
 */
CORE.Events = Base.extend(
    null,
    {
        BACKSPACE: 8,
        TAB: 9,
        NUM_CENTER: 12,
        ENTER: 13,
        RETURN: 13,
        SHIFT: 16,
        CTRL: 17,
        ALT: 18,
        PAUSE: 19,
        CAPS_LOCK: 20,
        ESC: 27,
        SPACE: 32,
        PAGE_UP: 33,
        PAGE_DOWN: 34,
        END: 35,
        HOME: 36,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        PRINT_SCREEN: 44,
        INSERT: 45,
        DELETE: 46,
        ZERO: 48,
        ONE: 49,
        TWO: 50,
        THREE: 51,
        FOUR: 52,
        FIVE: 53,
        SIX: 54,
        SEVEN: 55,
        EIGHT: 56,
        NINE: 57,
        A: 65,
        B: 66,
        C: 67,
        D: 68,
        E: 69,
        F: 70,
        G: 71,
        H: 72,
        I: 73,
        J: 74,
        K: 75,
        L: 76,
        M: 77,
        N: 78,
        O: 79,
        P: 80,
        Q: 81,
        R: 82,
        S: 83,
        T: 84,
        U: 85,
        V: 86,
        W: 87,
        X: 88,
        Y: 89,
        Z: 90,
        CONTEXT_MENU: 93,
        NUM_ZERO: 96,
        NUM_ONE: 97,
        NUM_TWO: 98,
        NUM_THREE: 99,
        NUM_FOUR: 100,
        NUM_FIVE: 101,
        NUM_SIX: 102,
        NUM_SEVEN: 103,
        NUM_EIGHT: 104,
        NUM_NINE: 105,
        NUM_MULTIPLY: 106,
        NUM_PLUS: 107,
        NUM_MINUS: 109,
        NUM_PERIOD: 110,
        NUM_DIVISION: 111,
        F1: 112,
        F2: 113,
        F3: 114,
        F4: 115,
        F5: 116,
        F6: 117,
        F7: 118,
        F8: 119,
        F9: 120,
        F10: 121,
        F11: 122,
        F12: 123,

        on: function(element, event, callback, scope) {
            callback = CORE.Events.addCallback(element, event, callback, scope);
            $(element).on(event, callback);
        },

        off: function(element, event, callback, scope) {
            if (callback) {
                callback = CORE.Events.removeCallback(element, event, callback, scope);
                $(element).off(event, callback);
            }
            else if (event) {
                $(element).off(event);
            }
            else {
                $(element).off();
            }
        },

        preventDefault: function(e) {
            e.preventDefault();
        },

        stopPropagation: function(e) {
            e.stopPropagation();
        },

        stopEvent: function(e) {
            e.preventDefault();
            e.stopPropagation();
        },

        getOriginalEvent: function(e) {
            return e.originalEvent;
        },

        getTarget: function(e) {
            return e.target;
        },

        getCurrentTarget: function(e) {
            return e.currentTarget;
        },

        getRelatedTarget: function(e) {
            return e.relatedTarget;
        },

        getPageX: function(e) {
            return e.pageX;
        },

        getPageY: function(e) {
            return e.pageY;
        },

        getKeyCode: function(e) {
            return e.keyCode;
        },

        ready: function(callback) {
            $(callback);
        },




        //
        // everyting below is private
        //

        callbacks: {},

        addCallback: function(element, event, oldCallback, scope) {
            if (!scope) {
                return oldCallback;
            }
            if (!CORE.Events.callbacks[element]) {
                CORE.Events.callbacks[element] = {};
            }
            if (!CORE.Events.callbacks[element][event]) {
                CORE.Events.callbacks[element][event] = {};
            }
            if (!CORE.Events.callbacks[element][event][oldCallback]) {
                CORE.Events.callbacks[element][event][oldCallback] = {};
            }
            var newCallback = function(e) {
                oldCallback.call(scope, e);
            };
            CORE.Events.callbacks[element][event][oldCallback][scope] = newCallback;
            return newCallback;
        },

        removeCallback: function(element, event, oldCallback, scope) {
            if (!scope) {
                return oldCallback;
            }
            if (!CORE.Events.callbacks[element]) {
                return oldCallback;
            }
            if (!CORE.Events.callbacks[element][event]) {
                return oldCallback;
            }
            if (!CORE.Events.callbacks[element][event][oldCallback]) {
                return oldCallback;
            }
            var newCallback = CORE.Events.callbacks[element][event][oldCallback][scope];
            if (!newCallback) {
                return oldCallback;
            }
            return newCallback;
        }
    }
);