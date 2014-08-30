CORE.Observable = Base.extend(
	{
		constructor: function() {
		},

		on: function(event, callback, scope) {
			var items = [];
			if (typeof event == 'string') {
				items.push(
					{
						event: event,
						callback: callback,
						scope: scope || this
					}
				);
			}
			else {
				for (var i in event) {
					items.push(
						{
							event: i,
							callback: event[i],
							scope: this
						}
					);
				}
			}
			for (var i = 0; i < items.length; i++) {
				var item = items[i];
				if (this.findObserver(item.event, item.callback, item.scope) != -1) {
					continue;
				}
				if (!this.observers) {
					this.observers = {};
				}
				if (!this.observers[item.event]) {
					this.observers[item.event] = [];
				}
				this.observers[item.event].push(
					{
						callback: item.callback,
						scope: item.scope
					}
				);
			}
		},

		off: function(event, callback, scope) {
			var items = [];
			if (typeof event == 'string') {
				items.push(
					{
						event: event,
						callback: callback,
						scope: scope || this
					}
				);
			}
			else {
				for (var i in event) {
					items.push(
						{
							event: i,
							callback: event[i],
							scope: this
						}
					);
				}
			}
			for (var i = 0; i < items.length; i++) {
				var item = items[i];
				var j = this.findObserver(item.event, item.callback, item.scope);
				if (j != -1) {
					this.observers[item.event].splice(j, 1);
				}
			}
		},

		fireEvent: function(event) {
			if (!this.observers) {
				return true;
			}
			var observers = this.observers[event];
			if (!observers) {
				return true;
			}
			var result = true;
			for (var i = 0; i < observers.length; i++) {
				var observer = observers[i];
				if (observer.callback.apply(observer.scope, Array.prototype.slice.call(arguments, 1).concat([ undefined ])) === false) { // ??? extra parameter for compatibility with Ext
					result = false;
				}
			}
			return result;
		},

		relayEvents: function(observable, events) {
			var that = this;
			for (var i = 0; i < events.length; i++) {
				var event = events[i];
				observable.on(
					event,
					function(event) {
						return function() {
							return that.fireEvent.apply(that, [ event ].concat(Array.prototype.slice.call(arguments, 0)));
						}
					}(event)
				);
			}
		},

		findObserver: function(event, callback, scope) {
			if (!this.observers) {
				return -1;
			}
			var observers = this.observers[event];
			if (!observers) {
				return -1;
			}
			for (var i = 0; i < observers.length; i++) {
				var observer = observers[i];
				if (observer.callback === callback && observers.scope === scope) {
					return i;
				}
			}
			return -1;
		}
	}
);
