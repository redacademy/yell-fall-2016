( function( $ ) {

	$('.menu-toggle').on('click', function(event) {
		event.preventDefault();
		$('.main-navigation ul').animate({width: 'toggle'}).focus();
		$('.main-navigation ul').css("background-color","#e8e8e8","width","80%");
		$('button').css("display","flex");
		$('.fa-bars').toggle();
		$('.back').toggle();
		$('.fa-arrow-circle-o-left').toggle();

})


	  $(window).scroll(function() {
		
        if ($(this).scrollTop() >= 690) {
			
            $('ul.menu').addClass('stickytop');
			 $('li a').addClass('stickytop2');
        }
        else {
            $('ul.menu').removeClass('stickytop');
			 $('li a').removeClass('stickytop2');
        }
    });

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

// video play==================================


(function ( $ ) {
$('#playbtn').on('click', function(e) {
	 e.stopPropagation();
    $("#video").css('display', 'block');
	$('.home-hero').css('background','black');
	$('.home-hero-mobile').hide();
	$('.home-hero-p').hide();
	$('#playbtn').hide();
	$('.home-hero-txt').hide();
    $("#video")[0].src += "?autoplay=1";
})
})(jQuery);


(function ( $ ) {
$('.home-hero').on('click', function(e) {
 e.stopPropagation();
  $('#video').css('display', 'none');
  $("#video")[0].src += "?pause=1";
  $('.home-hero').removeAttr('style');

        var windowSize = $(window).width();

        if (windowSize <= 1000) {
            
			$('.home-hero-mobile').show();
			  $('#playbtn').show();
        }
        else if (windowSize >= 1000) {
           
			$('.home-hero-txt').show();
			$('.home-hero-p').show();
			  $('#playbtn').show();
        }


  
   
   
})

})(jQuery);




//smooth scroll=============================================

jQuery(document).ready(function($){

    $(window).scroll(function(){

        if ($(this).scrollTop() < 200) {

            $('#smoothup') .fadeOut();

        } else {

            $('#smoothup') .fadeIn();

        }

    });

    $('#smoothup').on('click', function(){

        $('html, body').animate({scrollTop:0}, 'fast');

        return false;

        });

});



