<?php

function py_row( $atts, $content ) {
	return '<div class="row">' . $content . '</div>';
}

add_shortcode( 'row', 'py_row' );

?>