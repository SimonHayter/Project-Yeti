<?php 
	if( ! function_exists( 'py_scripts' ) ) {
		function py_scripts() {
			if (!is_admin()) {
				wp_register_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '', true );
				wp_enqueue_script( 'foundation-js' );
			}
		}
	}
add_action( 'wp_enqueue_scripts', 'py_scripts' );
?>