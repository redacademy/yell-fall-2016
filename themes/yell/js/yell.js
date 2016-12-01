/*( function( $ ) {

	$('.menu-toggle').on('click', function(event) {
		event.preventDefault();
		$('#primary-menu ul').toggle("slide", {direction: "left"}, 2000);
})
})( jQuery );
*/
( function( $ ) {

	$('.menu-toggle').on('click', function(event) {
		event.preventDefault();
		$('#primary-menu ul').animate({width: 'toggle'}).focus();
})
	$('#primary-menu ul').focusout(function(){
		$('#primary-menu ul').animate({width:toggle});
	})
})( jQuery );