<?php /* Template Name: Page Blank */ get_header(); ?>
<?php ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>