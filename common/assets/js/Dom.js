/**
 * Created by Guanyu on 8/30/2014.
 */
CORE.Dom = Base.extend(
    null,
    {
        hasCls: function(e, cls) {
            return $(e).hasClass(cls);
        },

        addCls: function(e, cls) {
            $(e).addClass(cls);
        },

        removeCls: function(e, cls) {
            $(e).removeClass(cls);
        },

        toggleCls: function(e, cls) {
            $(e).toggleClass(cls);
        },

        create: function(o, parentNode) {
            var el,
                doc = document,
                useSet,
                attr,
                val,
                cn,
                confRe = /tag|children|cn|html$/i;

            if ($.isArray(o)) {                       // Allow Arrays of siblings to be inserted
                el = doc.createDocumentFragment(); // in one shot using a DocumentFragment
                for (var i = 0, l = o.length; i < l; i++) {
                    CORE.Dom.create(o[i], el);
                }
            }
            else if (typeof o == 'string') {         // Allow a string as a child spec.
                el = doc.createTextNode(o);
            }
            else {
                el = doc.createElement( o.tag || 'div' );
                useSet = !!el.setAttribute; // In IE some elements don't have setAttribute
                for (attr in o) {
                    if(!confRe.test(attr)) {
                        val = o[attr];
                        if(attr == 'cls') {
                            el.className = val;
                        }
                        else {
                            if(useSet) {
                                el.setAttribute(attr, val);
                            }
                            else {
                                el[attr] = val;
                            }
                        }
                    }
                }
                if (o.style) {
                    $(el).css(o.style);
                }
                if ((cn = o.children || o.cn)) {
                    CORE.Dom.create(cn, el);
                }
                else if (o.html) {
                    el.innerHTML = o.html;
                }
            }
            if(parentNode) {
                parentNode.appendChild(el);
            }
            return el;
        },

        offset: function(e) {
            return $(e).offset();
        }
    }
);