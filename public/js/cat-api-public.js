(function( $ ) {
	'use strict';

	$(document).ready(function() {
		console.log("We have js?");
		// we have JS
		$.post(
			cat_ajax.ajax_url,
			{
				action: 'get_random_cat',
			},
		// maybe do something if successful?

		// maybe do something on error?
		).done(function(response) {
			console.log(response);
		})
		// maybe do something on fail?
	})

})( jQuery );
