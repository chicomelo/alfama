<?php

// Muda processador de imagens
function hs_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );


if ( ! function_exists( 'alfama_assets' ) ) :


	function alfama_assets() {

		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style( 
			'main-style', 
			get_template_directory_uri() . '/assets/css/main-style.css',
			array(),
			$version_string
		);


		wp_register_script( 
			'main-scripts', 
			get_template_directory_uri() . '/assets/js/main-scripts.js',
			array('jquery'),
			$version_string,
			true
		);
	
		wp_enqueue_style( 'main-style' );
		wp_enqueue_script( 'main-scripts' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'alfama_assets' );

// Add Shortcode
function img_url() {
    return get_template_directory_uri().'-child/img/'; 
}
add_shortcode( 'img-url', 'img_url' );

// Register a new navigation menu
function add_Main_Nav() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );


function alfama_custom_logo_setup() {
	$defaults = array(
		'height'               => 180,
		'width'                => 105,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'alfama_custom_logo_setup' );

add_theme_support( 'custom-logo' );



?>