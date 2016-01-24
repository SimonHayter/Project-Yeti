<?php /* Template Name: Page Sidebar Left */ get_header(); ?>
<?php ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="large-12 columns">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</div>
	<?php get_sidebar('page'); ?>
	<div class="small-12 large-8 columns">
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>