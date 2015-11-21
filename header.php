<!doctype html>
<html class="py-theme" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="title-bar" data-responsive-toggle="YetiMenu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title"><?php bloginfo( 'name' ); ?></div>
  </div>
  <nav class="top-bar" id="YetiMenu">
    <div class="top-bar-left">
      <ul class="menu show-for-medium">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </li>
      </ul>
    </div>
    <div class="top-bar-right">
      <?php wp_nav_menu( array( 'theme_location' => 'topbarmenu', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>', 'fallback_cb' => 'py_menu_fallback', 'walker' => new py_menu( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
    </div>
  </nav>
</header>
<main>