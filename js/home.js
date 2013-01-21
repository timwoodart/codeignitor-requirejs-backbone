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
					'And this is the Ajax API call. Was it successful? '
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