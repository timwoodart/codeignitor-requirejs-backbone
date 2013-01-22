'use strict';

/**
 * ExampleView
 * @see http://backbonetutorials.com/what-is-a-view/
 *
 */

define('app/views/ExampleView',
	[
		'jquery',
		'underscore',
		'backbone',
		'hogan',
		'app/collections/ExampleCollection'
	],
	function ($, _, Backbone, Hogan, ExampleCollection) {
		var ExampleView = Backbone.View.extend({

			// Backbone tag setup
		    tagName: 'div',
		    className: 'example-container',

		    // Hogan Compiler = remember to always escape new lines or you will get an error
		    exampleTemplate: Hogan.compile(' \
		    	<div class="example-div"> \
		    		<p>{{data}}</p> \
		    	</div> \
		    '),

		    // Event listener
		    events: function () {
		    	var events = {
		    		'click .example-div' : 'exampleClicked'
		    	};
		    	return events;
		    },

		    exampleClicked: function () {
		    	// Just an example of an event listener to show things are working
		    	// Clone the element and add back to the page
		    	var clone = this.$el.clone();
		    	this.$el.append(clone);
		    },

			initialize: function() {				
				// deal with JS 'this' issues
				_.bindAll(this);
				return this;
			},

			render: function() {
				var data = 'Hogan Compiled HTML via Backbone View. Click to duplicate';
				this.$el
					.css({cursor:'pointer'})
					.append(
						this.exampleTemplate.render({data:data}
					)
				);
				// Add to body
				$('body').append(this.$el);
			}

		}); // end Backbone.View.extend()

		return ExampleView;
	}
);