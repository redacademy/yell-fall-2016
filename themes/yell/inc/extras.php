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
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


//////////////// add a readmore buttom to posts///////////////////

// function new_excerpt_more($more) {
//        global $post;
// 	return '<div class="readmore"><a class="moretag" href="'. get_permalink($post->ID) . '"> read more > </a></div>';
// }
// add_filter('excerpt_more', 'new_excerpt_more');


/////////////Custom About Page background Image (hero banner)////////////
function my_styles_method() {

  if(is_page( 'about' )){

       $url = CFS()->get( 'aboout_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .about-hero{
         background: url({$url}) no-repeat center bottom;
         height:100vh;
         background-size: cover, cover;
       }";

       wp_add_inline_style( 'red-starter-style', $custom_css );
}elseif(is_page( 'programs' )){

       $url = CFS()->get( 'program_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .program-hero{
         background: url({$url}) no-repeat center bottom;
         height:100vh;
         background-size: cover, cover;
       }";

       wp_add_inline_style( 'red-starter-style', $custom_css );
 } elseif(is_page( 'professionals' )){

       $url = CFS()->get( 'professionals_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .expert-hero{
         background: url({$url}) no-repeat center bottom;
         height:100vh;
         background-size: cover, cover;
         
       }";

       wp_add_inline_style( 'red-starter-style', $custom_css );
 } elseif(is_page( 'supporters' )){

       $url = CFS()->get( 'supporters_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .supporters-hero{
         background: url({$url}) no-repeat center bottom;
         height:100vh;
         background-size: cover, cover;
       }";
       wp_add_inline_style( 'red-starter-style', $custom_css );

 }elseif(is_page( 'thank-you' )){
       $url = CFS()->get( 'program_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .thanks-hero{
         background:linear-gradient(to bottom, rgba(0,0,0,0.25) 0%, rgba(0,0,0,0.25) 100% ), url({$url}) no-repeat center bottom;
 height:100vh;
         background-size: cover, cover;
       }";

   wp_add_inline_style( 'red-starter-style', $custom_css );

 }elseif(is_page( '' )){
       $url = CFS()->get( 'home_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .home-hero{
         background: url({$url}) no-repeat center bottom;
         height:600px;
         background-size: cover, cover;
         
       }";

   

       wp_add_inline_style( 'red-starter-style', $custom_css );

}}
     add_action( 'wp_enqueue_scripts', 'my_styles_method' );

/////////logo in log in page///////////
function my_login_logo() {?>

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
add_action( 'login_enqueue_scripts', 'my_login_logo' );


////////////change URL of custom logo on login page///////////

function my_loginURL() {
    return '#';
}
add_filter('login_headerurl', 'my_loginURL');


/////////////change the title tag of this link////////////

function my_loginURLtext() {
    return 'YOUNG ENTREPRENEUR LEADERSHIP LAUNCHPAD';
}
add_filter('login_headertitle', 'my_loginURLtext');
