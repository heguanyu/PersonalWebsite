CORE.Page = CORE.Component.extend(
    {
        constructor: function(param) {
            var that = this;
            this.param = param;
            var spec = {
                cls: 'page',
                cn: [
                    {
                        cls: 'contentsContainer',
                        id: '_contentsContainer'
                    }
                ]
            };

            var dom = CORE.Dom.create(spec);
            var contentsContainer = dom.querySelector('#_contentsContainer');
            contentsContainer.appendChild(this.param.contents);
            this.param.container.appendChild(dom);
        }
    }
);