( function( $ ) {

	$('.menu-toggle').on('click', function(event) {
		console.log('hi htere');
		event.preventDefault();
		$('#primary-menu ul').toggle("slide", {direction: "left"}, 2000);
})
})( jQuery );