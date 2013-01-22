'use strict';

	/** 
	  * RequireJS config and shim
	  * @see http://requirejs.org/docs/api.html#config
	  *
	  * Also a good read to explain RequireJS dependency management
	  * @link http://aaronhardy.com/javascript/javascript-architecture-requirejs-dependency-management/
      *
	  */

requirejs.
	config({
		// enforceDefine to catch load failures in IE
		// @see http://requirejs.org/docs/api.html#ieloadfail
		// @see http://requirejs.org/docs/api.html#config-enforceDefine
		// See below for load require() | define() comment with this option
    	enforceDefine: true,

    	// @see http://requirejs.org/docs/api.html#pathsfallbacks
		// If the CDN location fails, load from local location

		// @TODO - work with local copies in development, and uncomment the CDN hosted when you go live
		paths: {
		'jquery': [//'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min',
					'libs/jquery.min'],
		'jquery-ui': [//'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min',
					'libs/jquery-ui.min'],
		'backbone': [//'http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min',
					'libs/backbone'],
		'underscore': [//'http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.3/underscore-min',
					'libs/underscore'],
		'hogan': 'libs/hogan'
	},
	// @see http://requirejs.org/docs/api.html#config-shim
	shim: {
		'jquery': {
			exports: '$'
		},
		'jquery-ui': {
			deps: ['jquery'],
			exports: '$.ui',
		},
		'underscore': {
			exports: '_'
		},
		'backbone': {
			deps: ['jquery', 'underscore'],
			exports: 'Backbone'
		},
		'hogan' : {
			exports: 'Hogan'
		}
	}
});

 // DEV NOTE: If you do set enforceDefine: true, and you use data-main="" to load your main JS module,
 // then that main JS module must call define() instead of require() to load the code it needs.
 // The main JS module can still call require/requirejs to set config values,
 // but for loading modules it should use define().

define(['module/Example'], function(Example) {
	Example.init();
});