</main>
<footer>
    <?php get_sidebar('newsletter'); ?>
    <div class="py-footer-menu-b">
        <div class="row">
            <div class="large-12 columns">
                <?php get_sidebar('footer'); ?>
            </div>
        </div>
    </div>
    <div class="py-copyright">
        <div class="row">
            <div class="large-12 columns">
                <?php wp_nav_menu(array('theme_location' => 'footermenu', 'container' => false, 'menu_class' => 'py-footer-menu', 'fallback_cb' => 'py_footermenu_fallback', 'items_wrap'      => '<ul class="menu simple">%3$s</ul>')); ?>
            </div>
            <div class="medium-12 columns text-left">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, Inc. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>(function($){$(document).foundation();})(jQuery);</script>    
</body>
</html>