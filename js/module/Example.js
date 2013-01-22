'use strict';

/**
 * Example
 *
 * Entry point into module
 * @see http://backbonetutorials.com/organizing-backbone-using-modules/
 *
 */

define('module/Example',
	[
		'jquery',
		'underscore',
		'backbone',
		'app/views/ExampleView'
	],
	function ($, _, Backbone, ExampleView) {
		var Example = {
			init: function(){
				this.exampleView = new ExampleView();
				this.exampleView.render();
			}// end init
	};

	return Example;
	}
);