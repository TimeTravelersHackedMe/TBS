$(document).ready(function() {

// Initial masonry call
$('#infinite').imagesLoaded( function() {
	// Start masonry
	$('#infinite').masonry({
		itemSelector: '.masonry'
	});

	// Unbind resize function (in favor of custom one)
	// $('#infinite').masonry('unbindResize');
});

$(window).resize( function () {
	setTimeout( function () {
		$('#infinite').masonry();
	}, 1000);
});

});
