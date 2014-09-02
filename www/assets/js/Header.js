/**
 * Created by Guanyu on 8/31/2014.
 */
CORE.Header = CORE.Component.extend(
    {
        constructor: function(param) {
            var that = this;
            this.param = param;
            var spec = {
                cls: 'header',
                cn: [
                    {
                        cls: 'menuRow',
                        cn: {
                            cls: 'menuContainer',
                            id: '_menuContainer'
                        }
                    },
                    {
                        cls: 'breakoutText',
                        cn: 'Breakout Report Style with WebGL'
                    }
                ]

            };

            var dom = CORE.Dom.create(spec);

            var menuContainer = dom.querySelector('#_menuContainer');

            var menu = new CORE.Menu(
                {
                    container: menuContainer
                }
            );
            this.param.container.appendChild(dom);
        }
    }
);