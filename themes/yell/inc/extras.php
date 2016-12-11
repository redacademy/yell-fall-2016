<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function yell_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'yell_body_classes' );



/////////////Custom About Page background Image (hero banner)////////////
function yell_styles_method() {

  if(is_page( 'about' )){

       $url = CFS()->get( 'aboout_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .about-hero{
         background-image:linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ), url({$url});
         height:100vh;
         background-size: cover, cover;
       }
       
       #menu-item-79{
         text-decoration:underline;
         }";

       wp_add_inline_style( 'red-starter-style', $custom_css );
}elseif(is_page( 'programs' )){

       $url = CFS()->get( 'program_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .program-hero{
         background-image:linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ), url({$url});
         height:100vh;
         background-size: cover, cover;
       }
       
       #menu-item-84{
         text-decoration:underline;
         }";

       wp_add_inline_style( 'red-starter-style', $custom_css );
 } elseif(is_page( 'professionals' )){

       $url = CFS()->get( 'professionals_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .expert-hero{
         background-image:linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ), url({$url});
         height:100vh;
         background-size: cover, cover;
         }
         #menu-item-81{
         text-decoration:underline;
         }
         ";

       wp_add_inline_style( 'red-starter-style', $custom_css );
 } elseif(is_page( 'supporters' )){

       $url = CFS()->get( 'supporters_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .supporters-hero{
         background-image: linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ),url({$url});
         height:100vh;
         background-size: cover, cover;
       }
       
       #menu-item-86{
         text-decoration:underline;
         }";
       wp_add_inline_style( 'red-starter-style', $custom_css );

       }elseif(is_home()){
       $url = CFS()->get( 'news_stories_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
      
       #menu-item-209{
         text-decoration:underline;
         }";
       wp_add_inline_style( 'red-starter-style', $custom_css );
 }elseif(is_page( 'thank-you' )){
       $url = CFS()->get( 'program_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .thanks-hero{
         background-image:linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ), url({$url});
 height:100vh;
         background-size: cover, cover;
       }";

   wp_add_inline_style( 'red-starter-style', $custom_css );

    }elseif(is_page( 'contact' )){
       $custom_css = "
       #menu-item-80{
         text-decoration:underline;
         }
       ";

   wp_add_inline_style( 'red-starter-style', $custom_css );

     }elseif(is_page( 'get-involved' )){
       $custom_css = "
       #menu-item-125{
         text-decoration:underline;
         }
       ";

   wp_add_inline_style( 'red-starter-style', $custom_css );

   }elseif(is_page( 'student' )){
       $custom_css = "
       #menu-item-85{
         text-decoration:underline;
         }
       ";

   wp_add_inline_style( 'red-starter-style', $custom_css );

 }elseif(is_page( '' )){
       $url = CFS()->get( 'home_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .home-hero{
         background-image:linear-gradient( to bottom, rgba(139, 192, 208, 0.5) 0%, rgba(139, 192, 208, 0.5) 100% ), url({$url});
         height:600px;
         background-size: cover, cover;
         
       }";

   

       wp_add_inline_style( 'red-starter-style', $custom_css );

}}
     add_action( 'wp_enqueue_scripts', 'yell_styles_method' );

/////////logo in log in page///////////
function yell_login_logo() {?>

  <style type="text/css">
    #login h1 a,
    .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri();
      ?>/images/yell-logo.png);
      padding-bottom: 131px;
      background-size: 220px !important;
      width: 300px !important;
    }
  </style>
  <?php
}
add_action( 'login_enqueue_scripts', 'yell_login_logo' );


////////////change URL of custom logo on login page///////////

function yell_loginURL() {
    return '#';
}
add_filter('login_headerurl', 'yell_loginURL');


/////////////change the title tag of this link////////////

function yell_loginURLtext() {
    return 'YOUNG ENTREPRENEUR LEADERSHIP LAUNCHPAD';
}
add_filter('login_headertitle', 'yell_loginURLtext');
