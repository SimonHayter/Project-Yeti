<?php get_header(); ?>
<div class="row">
  <div class="small-12 large-8 columns">
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php py_article_meta(); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'projectyeti'), 'after' => '</p></nav>' )); ?>
        <p class="entry-tags"><?php the_tags(); ?></p>
        <?php edit_post_link('Edit this Post'); ?>
      </footer>
    </div>
    <?php comments_template(); ?>
    <?php endwhile; // End the loop ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>