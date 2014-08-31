CORE.Introduction = CORE.Component.extend(
    {
        constructor: function(param) {
            var that = this;
            this.param = param;
            var spec = {
                cls: 'introduction',
                cn: [
                    {
                        cls: 'main',
                        id: '_main',
                        cn: [
                            {
                                cls: 'headerContainer',
                                id: '_headerContainer'
                            },
                            {
                                cls: 'contentContainer',
                                id: '_contentContainer',
                                cn: [
                                    {
                                        cls: 'logo',
                                        cn: {
                                            tag: 'h1',
                                            cn: {
                                                tag: 'a',
                                                href: 'index.php',
                                                cn: [
                                                    {
                                                        tag: 'span',
                                                        cn: 'Guanyu He'
                                                    },
                                                    {
                                                        tag: 'small',
                                                        cn: 'University of Pennsylvania'
                                                    }
                                                ]
                                            }
                                        }
                                    },
                                    {
                                        cls: 'fbg'
                                    }
                                ]
                            }
                        ]
                    }
                ]
            };

            var dom = CORE.Dom.create(spec);

            var headerContainer = dom.querySelector('#_headerContainer');
            var header = new CORE.Header(
                {
                    container: headerContainer
                }
            );
            this.param.container.appendChild(dom);
        }
    }
);