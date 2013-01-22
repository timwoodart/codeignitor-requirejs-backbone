'use strict';

/**
 * ExampleCollection
 * @see http://backbonetutorials.com/what-is-a-collection/
 *
 */

define('app/collections/ExampleCollection',
 	[
 		'jquery',
 		'underscore',
 		'backbone',
 		'app/models/ExampleModel'
 	],
 	function ($, _, Backbone, ExampleModel) {
 		var ExampleCollection = Backbone.Collection.extend({

 			// Populate Collection, ect..

 		}); // end Backbone.Collection.extend()

		return ExampleCollection;
	}
);