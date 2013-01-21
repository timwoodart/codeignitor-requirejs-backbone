'use strict';

define('global',
	[
		'jquery',
		'jquery-ui',
		'home'
	],
function ($ ,jqueryUI, Home){
	var Global = {
		init: function(){
			$(function(){
				var newh3 = $('<h3/>').text('RequireJS Exmaple. Now drag me around...').css({cursor:'pointer',display:'inline-block'}).draggable();
				$('body').append(newh3);

				// Test API call
				$.ajax({
					url: '/api',
					type: 'POST',
					dataType: 'json',
					data: {id:1},
					success: function (data, textStatus, xhr) {
						//console.log(data);
						//console.log(textStatus);
						//console.log(xhr);
						Home.init(data);
					},
					error: function (xhr, textStatus, errorThrown) {
						//console.log(errorThrown);
					}
				})

			});

		}// end init
	};//end Global
	return Global;
});