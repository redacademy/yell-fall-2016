( function( $ ) {

	$('.menu-toggle').on('click', function(event) {
		event.preventDefault();
		$('#primary-menu ul').animate({width: 'toggle'}).focus();
		$('.main-navigation ul').css("background-color","#e8e8e8");
		

})
	$('#primary-menu ul').focusout(function(){
		$('#primary-menu ul').animate({width:toggle});
	})
})( jQuery );
