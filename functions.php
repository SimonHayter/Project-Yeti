<?php

require_once('lib/rinse.php');
require_once('lib/styles.php');
require_once('lib/scripts.php');
require_once('lib/foundation.php'); 
require_once('lib/menu.php'); 
require_once('lib/supports.php');
require_once('lib/widgets.php');
require_once('lib/meta.php');

load_theme_textdomain('project-yeti', get_template_directory() . '/lang');

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('project-yeti', get_template_directory() . '/lang');
}
?>