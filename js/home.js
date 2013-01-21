'use strict';

define('home',
	[
		'jquery'
	],
function ($){
		var Home = {
			init: function(data){
				var success = '<b>' + data.success + '</b>';
				this.nextStep(
					'And this created next... and lets show you the XHR request. Is it successful? '
					+ success
				);
			},
			nextStep: function(html){
				var newp = $('<p/>').append(html);
				$('body').append(newp);
			}
		};
		return Home;
});