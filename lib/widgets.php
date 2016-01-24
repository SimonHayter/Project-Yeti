<?php 

if ( ! function_exists( 'py_widgets' ) ) :
function py_widgets() {

  register_sidebar(array(
    'id' => 'py-sidebar',
    'name' => __( 'Sidebar for Blog', 'projectyeti' ),
    'description' => __( 'Drag items to populate sidebar widget', 'projectyeti' ),
    'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'py-page-sidebar',
    'name' => __( 'Sidebar for Page', 'projectyeti' ),
    'description' => __( 'Drag items to populate sidebar widget', 'projectyeti' ),
    'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'py-footer',
    'name' => __( 'Footer', 'projectyeti' ),
    'description' => __( 'Drag items to populate footer menu', 'projectyeti' ),
    'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'py-newsletter',
    'name' => __( 'Newsletter', 'projectyeti' ),
    'description' => __( 'Drag items to populate subscribe to news letter', 'projectyeti' ),
    'before_widget' => '<div id="%1$s" class="large-12 columns widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

}

add_action( 'widgets_init', 'py_widgets' );
endif;
?>