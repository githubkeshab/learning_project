<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SQZ_Toolbox
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
 function sqz_toolbox_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
 		$classes[] = 'hfeed';
	}

 	// Adds a class of no-sidebar when there is no sidebar present.
 	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
 		$classes[] = 'no-sidebar';
	}

 	return $classes;
 }
 add_filter( 'body_class', 'sqz_toolbox_body_classes' );

// /**
//  * Add a pingback url auto-discovery header for single posts, pages, or attachments.
//  */
// function sqz_toolbox_pingback_header() {
// 	if ( is_singular() && pings_open() ) {
// 		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
// 	}
// }
// add_action( 'wp_head', 'sqz_toolbox_pingback_header' );


/******************************************************************************************************/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> '',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position'		=>'40',
		'redirect'		=> false,
        'icon_url' => get_template_directory_uri().'/images/sqz-icon.svg',
	));
}
// Theme setup
function squeezetoolbox_setup() {
	// Navigation Menus
	register_nav_menus(array(
	'primary-nav' => __('Primary Navigation'),
	'footer-nav' => __('Footer Navigation'),
	'mobile-nav' => __('Mobile Navigation'),
	));

	// add featured image support
	add_theme_support('post-thumbnails');
	add_image_size( 'banner_image', 1920, 1080, true);
	add_image_size( 'banner_image_2x', 3840, 2160, true);

	add_image_size( 'calloff_thumb', 1570, 1570, true);
	add_image_size( 'calloff_thumb_2x', 3140, 3140, true);

	add_image_size( 'studiohome', 700, 400, true);
	add_image_size( 'studiohome_2x', 1400, 800, true);

	add_image_size( 'threecolumn_img', 350, 200, true);
	add_image_size( 'threecolumn_img_2x', 700, 400, true);

	add_image_size( 'bloglistings_image', 500, 9999, false);
	add_image_size( 'bloglistings_image_2x', 1000, 19998, false);


	// Add post format support
	//add_theme_support('post-formats', array('gallery','video','image'));
}

// svg support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
