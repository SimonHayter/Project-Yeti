<?php 

if ( ! function_exists( 'py_article_meta' ) ) {
    function py_article_meta() {
        echo '<span class="byline author">'. __('Written by', 'projectyeti') .' '. get_the_author() .' </span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
};

?>