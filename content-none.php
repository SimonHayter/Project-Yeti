<?php get_header(); ?>
<div id="post-0" class="row post no-results not-found entry-content">
	<div class="large-12 columns text-center">
		<h1><?php _e( 'Oh noes!', 'projectyeti' ); ?></h1>
		<p><?php _e( 'Sorry but it seems that does not exist! perhaps try searching for something else!', 'projectyeti' ); ?></p>
		<div class="row">
			<div class="large-4 columns large-centered">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>