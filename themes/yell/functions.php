<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_starter_Theme
 */

if ( ! function_exists( 'yell_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function yell_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // yell_setup
add_action( 'after_setup_theme', 'yell_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function yell_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yell_content_width', 640 );
}
add_action( 'after_setup_theme', 'yell_content_width', 0 );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function yell_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'yell_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function yell_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'yell', get_template_directory_uri() . '/build/js/yell.min.js', array('jquery'), false, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yell_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function gform_column_splits($content, $field, $value, $lead_id, $form_id) {
if(!is_admin()) { // only perform on the front end
    if($field['type'] == 'section') {
        $form = RGFormsModel::get_form_meta($form_id, true);

        // check for the presence of multi-column form classes
        $form_class = explode(' ', $form['cssClass']);
        $form_class_matches = array_intersect($form_class, array('two-column', 'three-column'));

        // check for the presence of section break column classes
        $field_class = explode(' ', $field['cssClass']);
        $field_class_matches = array_intersect($field_class, array('gform_column'));

        // if field is a column break in a multi-column form, perform the list split
        if(!empty($form_class_matches) && !empty($field_class_matches)) { // make sure to target only multi-column forms

            // retrieve the form's field list classes for consistency
            $form = RGFormsModel::add_default_properties($form);
            $description_class = rgar($form, 'descriptionPlacement') == 'above' ? 'description_above' : 'description_below';

            // close current field's li and ul and begin a new list with the same form field list classes
            return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';

        }
    }
}

return $content;
}

add_filter('gform_field_content', 'gform_column_splits', 100, 5);