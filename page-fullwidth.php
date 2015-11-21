<?php /* Template Name: Page Full Width */ get_header(); ?>
<?php ?>
<?php while (have_posts()) : the_post(); ?><!-- page.php -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="large-12 columns">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>