<?php
/**
 * Sabi theme functions.
 *
 * @category functions
 * @package dim-sumco
 * @author Lille Hummer
 */

require_once( 'library/hummer.php' );
require_once( 'library/clean.php' );
require_once( 'library/admin.php' );
require_once( 'library/shortcodes.php' );

/**
 * Setup theme.
 */
function hummer_ahoy() {

	// add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

	load_theme_textdomain( 'dim-sumco', get_template_directory() . '/languages' );

	require_once( 'library/custom-post-type.php' );

	// Launching operation cleanup.
	add_filter( 'gallery_style', 'hummer_gallery_style' );
	add_filter( 'the_content', 'hummer_filter_ptags_on_images' );
	add_filter( 'excerpt_more', 'hummer_excerpt_more' );

	// Enqueue base scripts and styles.
	add_action( 'wp_enqueue_scripts', 'hummer_scripts_and_styles', 999 );

	// Launching this stuff after theme setup.
	hummer_theme_support();

	add_action( 'widgets_init', 'hummer_register_sidebars' );

	add_filter('acf/settings/remove_wp_meta_box', '__return_true');

	add_filter( 'pre_option_rg_gforms_disable_css', '__return_true' );
}

add_action( 'after_setup_theme', 'hummer_ahoy' );

/**
 * Theme setup.
 */
function hummer_setup_theme() {
	update_option( 'image_default_link_type','none' );

	update_option( 'thumbnail_size_w', 400 );
	update_option( 'thumbnail_size_h', 9999 );
	update_option( 'thumbnail_crop', 0 );
	update_option( 'medium_size_w', 800 );
	update_option( 'medium_size_h', 9999 );
	update_option( 'medium_crop', 0 );
	update_option( 'large_size_w', 1600 );
	update_option( 'large_size_h', 9999 );
	update_option( 'large_crop', 0 );
}
add_action( 'after_setup_theme', 'hummer_setup_theme' );

/**
 * Add image sizes.
 */
// add_image_size( 'custom-size', 100, 100, true );

/**
 * Register custom image sizes.
 *
 * @param array $sizes standard image sizes.
 */
function hummer_custom_image_sizes( array $sizes ) {
	return array_merge( $sizes, array(
		// 'custom-size' => Custom Size'
	));
}
add_filter( 'image_size_names_choose', 'hummer_custom_image_sizes' );


/**
 * Register scripts.
 */
function hummer_scripts_and_styles() {
	global $wp_styles;
	if ( ! is_admin() ) {

		wp_enqueue_script( 'jquery' );

		$manifest = file_get_contents( get_stylesheet_directory() . '/manifest.json');
		$manifest = json_decode($manifest, true);

		wp_enqueue_script( 'vendor', get_stylesheet_directory_uri() . '/' . $manifest['vendor.js'], array(), '', true );
		wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/' . $manifest['app.js'], array(), '', true );
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/' . $manifest['app.css'], array(), '', 'all' );
	}
}

/**
 * Register sidebars.
 */
function hummer_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'The primary sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}

/**
 * Theme Options
 */

if( function_exists('acf_add_options_page') ) {

    // add parent
   $parent = acf_add_options_page(array(
       'page_title' 	=> 'Theme Options',
       'menu_title' 	=> 'Theme Options',
       'redirect' 		=> false
   ));

}
