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


// show and hide content on click for experts page
( function( $ ) {

	$('.teacher-btn').on('click', function(event) {
		event.preventDefault();
		$('.teacher-info').animate({height: 'toggle'}).focus();
})
	$('.teacher-info').focusout(function(){
		$('.teacher-info').animate({height:toggle});
	})
})( jQuery );

( function( $ ) {

	$('.mentor-btn').on('click', function(event) {
		event.preventDefault();
		$('.mentor-info').animate({height: 'toggle'}).focus();
})
	$('.mentor-info').focusout(function(){
		$('.mentor-info').animate({height:toggle});
	})
})( jQuery );



( function( $ ) {

	$('.speaker-btn').on('click', function(event) {
		event.preventDefault();
		$('.speaker-info').animate({height: 'toggle'}).focus();
})
	$('.speaker-info').focusout(function(){
		$('.speaker-info').animate({height:toggle});
	})
})( jQuery );

// school district select bar============================

    (function ( $ ) {
      // bind change event to select
      $('#dynamic_select').on('change', function () {
		  console.log('working?');
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
     
      })
    }) (jQuery);
