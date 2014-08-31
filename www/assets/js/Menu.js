/**
 * Created by Guanyu on 8/30/2014.
 */
CORE.Menu = CORE.Component.extend(
    {
        constructor: function(param) {
            var that = this;
            this.param = param;

            var items = [
                {
                    text: 'WebGL Ocean',
                    id: 'webgl_ocean'
                },
                {
                    text: 'Contact Me',
                    id: 'contact'
                },
                {
                    text: 'Tools',
                    id: 'tools'
                },
                {
                    text: 'Animation & Effects',
                    id: 'animation'
                },
                {
                    text: 'Game Design & Development',
                    id: 'game'
                },
                {
                    text: 'Rendering & Modeling',
                    id: 'render'
                }
            ];
            var spec = {
                cls: 'menu clear',
                cn: [
                    {
                        cls: 'titleText whiteText floatLeft',
                        cn: 'Guanyuhe.com'
                    },
                    {
                        cls: 'navigationButtonContainer floatRight clear',
                        id: '_navigationButtonContainer'
                    }
                ]

            };

            var dom = CORE.Dom.create(spec);

            var navigationButtonContainer = dom.querySelector('#_navigationButtonContainer');

            for (var i = 0 ; i < items.length; i++) {
                var navigationButtonSpec = {
                    cls: 'navigationButton floatRight pointer whiteText',
                    cn: items[i].text
                };

                var navigationButton = CORE.Dom.create(navigationButtonSpec);
                CORE.Events.on(
                    navigationButton,
                    'click',
                    function(id) {
                        return function(){
                            console.debug(id);
                        };
                    }(items[i].id),
                    this
                );

                navigationButtonContainer.appendChild(navigationButton);
            }

            this.param.container.appendChild(dom);
        }
    }
);