<?php
if( ! function_exists( 'py_styles' ) ) {
	function py_styles()
	{
		wp_register_style( 'foundation-css', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' ); // Foundation
		wp_register_style( 'projectyeti-css', get_stylesheet_directory_uri() . '/style.css', array(), ''); // Project Yeti
		wp_register_style('google-css', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Lora:400,700|Droid+Sans+Mono'); // Google Fonts
		wp_enqueue_style( 'foundation-css' );
		wp_enqueue_style( 'projectyeti-css' );
		wp_enqueue_style( 'google-css' );
	}
}
add_action( 'wp_enqueue_scripts', 'py_styles' );
?>