<?php

if( ! function_exists( 'py_scripts' ) ) {
	function py_scripts() {
	  if (!is_admin()) {

		wp_deregister_script( 'jquery' );  // Unregister jQuery
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.1.4.min.js', array(), '2.1.4', false ); // jQuery CDN
	    wp_register_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '', true );
	 	wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'foundation-js' );
	  }
	}
}

add_action( 'wp_enqueue_scripts', 'py_scripts' );

?>