'use strict';

/**
 * ExampleModel
 * @see http://backbonetutorials.com/what-is-a-model/
 *
 */

define('app/models/ExampleModel',
 	[
 		'jquery',
 		'underscore',
 		'backbone'
 	],
 	function ($, _, Backbone) {
 		var ExampleModel = Backbone.Model.extend({

 			// Set defaults, ect..

 		}); // end Backbone.Model.extend()

 		return ExampleModel;
 	}
 );