<?php

// Pagination
if( ! function_exists( 'py_pagination' ) ) {
    function py_pagination() {
        global $wp_query;
     
        $big = 999999999; 
     
        $paginate_links = paginate_links( array(
            'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'mid_size' => 5,
            'prev_next' => True,
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
            'type' => 'list'
        ) );
     
        if ( $paginate_links ) {
            echo '<div class="pagination-centered">';
            echo $paginate_links;
            echo '</div>';
        }
    }
}

// Topbar Menu fallback
if( ! function_exists( 'py_menu_fallback' ) ) {
    function py_menu_fallback() {
    echo '<div class="py-menu-fallback-class text-right">Oops! Please add a menu to the theme location <a href="' .  get_admin_url() . 'nav-menus.php" title="Fix your Menus">Topbar Menu</a></div>';
    }
}

// Footer Menu fallback
if( ! function_exists( 'py_footermenu_fallback' ) ) {
    function py_footermenu_fallback() {
    echo '<div class="py-footermenu-fallback-class">Doh! Please add a menu to the theme location <a href="' .  get_admin_url() . 'nav-menus.php" title="Fix your Menus">Footer Menu</a></div>';
    }
}

// Add active class to menu items that are current
if( ! function_exists( 'py_active_nav' ) ) {
    function py_active_nav( $classes, $item ) {
        if ( $item->current == 1 || $item->current_item_ancestor == true ) {
            $classes[] = 'active';
        }
        return $classes;
    }
}

add_filter( 'nav_menu_css_class', 'py_active_nav', 10, 2 );

// Active class on WP list pages
if( ! function_exists( 'py_active_list_page' ) ) {
    function py_active_list_page( $input ) {

        $pattern = '/current_page_item/';
        $replace = 'current_page_item active';

        $output = preg_replace( $pattern, $replace, $input );

        return $output;
    }
}
add_filter( 'wp_list_pages', 'py_active_list_page', 10, 2 );

?>