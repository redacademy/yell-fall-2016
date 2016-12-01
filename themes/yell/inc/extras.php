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

function new_excerpt_more($more) {
       global $post;
	return '<div class="readmore"><a class="moretag" href="'. get_permalink($post->ID) . '"> read more > </a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/////////////Custom About Page background Image (hero banner)////////////
function my_styles_method() {
    
    if(!is_page_template( 'page-about.php' )){
        return;
    }
    $url = CFS()->get('about_page_photo');
    $custom_css = "
    .about_photo{
        background-image:linear-gradient( to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url( {$url});
    }";
    wp_add_inline_style( 'red-starter-style', $custom_css );
}
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

