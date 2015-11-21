<?php

add_action('after_setup_theme','py_exercute');

if( ! function_exists( 'py_exercute' ) ) {
	function py_exercute() {
	    add_action('init', 'py_rinse'); // Main rinse
	    add_filter('the_generator', 'py_rss'); // Rinse WP version number from RSS
	    add_filter('wp_head', 'py_widget_recent_comments', 1 ); // Rinse CSS from recent comments
	    add_action('wp_head', 'py_recent_comments', 1); // Rinse comments in head
	    add_filter('gallery_style', 'py_gallery'); // Rinse gallery style
	    add_filter( 'img_caption_shortcode', 'py_img_caption', 10, 3 ); // Rinse IMG caption shortcode
	    add_filter('get_image_tag_class', 'py_img_tag_class', 0, 4); // Rinse IMG tag class
	    add_filter('get_image_tag', 'py_img_tag', 0, 4); // Rinse IMG tag
	    add_filter( 'the_content', 'py_img_unautop', 30 ); // Rinse IMG unautop
	}
}

if( ! function_exists( 'py_rinse' ) ) {
	function py_rinse() {
		remove_action( 'wp_head', 'rsd_link' ); // Really Simple Discovery service endpoint.
		remove_action( 'wp_head', 'wlwmanifest_link' ); // Rinse Windows Live Writer manifest file
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Rinse relational links for adjacent posts
		remove_action( 'wp_head', 'wp_generator' ); // Rinse WP generator
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Rinse detect Emoji script
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Rinse Emoji styles
	  	add_filter( 'style_loader_src', 'py_css_js_version', 9999 ); // Rinse WP version from <style>
		add_filter( 'script_loader_src', 'py_css_js_version', 9999 ); // Rinse WP version from <script>
	} 
}

// Rinse WP version from CSS & JavaScript
if( ! function_exists( 'py_css_js_version' ) ) {
	function py_css_js_version( $src ) {
	    if ( strpos( $src, 'ver=' ) )
	        $src = remove_query_arg( 'ver', $src );
	    return $src;
	}
}

// Rinse WP version number from RSS
if( ! function_exists( 'py_rss' ) ) {
	function py_rss() { return ''; }
}


// Rinse CSS from recent comments
if( ! function_exists( 'py_widget_recent_comments' ) ) {
	function py_widget_recent_comments() {
	   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
	      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	   }
	}
}

// Rinse comments in head
if( ! function_exists( 'py_recent_comments' ) ) {
	function py_recent_comments() {
	  global $wp_widget_factory;
	  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
	    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	  }
	}
}

// Rinse gallery style
if( ! function_exists( 'py_gallery' ) ) {
	function py_gallery($css) {
	  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
	}
}

// Rinse IMG caption shortcode
if( ! function_exists( 'py_img_caption' ) ) {
	function py_img_caption( $output, $attr, $content ) {

		if ( is_feed() )
			return $output;

		$defaults = array(
			'id' => '',
			'align' => 'alignnone',
			'width' => '',
			'caption' => ''
		);

		$attr = shortcode_atts( $defaults, $attr );

		if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
			return $content;

		$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';
		$output = '<figure' . $attributes .'>';
		$output .= do_shortcode( $content );
		$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';
		$output .= '</figure>';
		return $output;
	}
}

// Rinse IMG tag class
if( ! function_exists( 'py_img_tag_class' ) ) {
	function py_img_tag_class($class, $id, $align, $size) {
		$align = 'align' . esc_attr($align);
		return $align;
	}
}

// Rinse IMG tag
if( ! function_exists( 'py_img_tag' ) ) {
	function py_img_tag($html, $id, $alt, $title) {
		return preg_replace(array(
				'/\s+width="\d+"/i',
				'/\s+height="\d+"/i',
				'/alt=""/i'
			),
			array(
				'',
				'',
				'',
				'alt="' . $title . '"'
			),
			$html);
	}
}

// Rinse IMG unautop
if( ! function_exists( 'py_img_unautop' ) ) {
	function py_img_unautop($pee) {
	    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
	    return $pee;
	}
}

?>