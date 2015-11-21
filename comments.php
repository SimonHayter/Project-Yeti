<?php function py_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?>>
    <article class="callout" id="comment-<?php comment_ID(); ?>">
      <header class="comment-author">
        <?php echo get_avatar($comment,$size='96',$default=get_template_directory_uri() .' /img/yeti-avatar.png'); ?>
        <div class="author-meta">
          <?php printf(__('<cite class="fn">%s</cite>', 'projectyeti'), get_comment_author_link()) ?>
          <time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'projectyeti'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)', 'projectyeti'), '', '') ?>
        </div>
      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="notice">
        <p class="bottom"><?php _e('Your comment is awaiting moderation.', 'projectyeti') ?></p>
          </div>
      <?php endif; ?>
      <div class="comment">
        <?php comment_text() ?>
      </div>
      <footer><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></footer>
    </article>
<?php } ?>
<?php
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die (__('Please do not load this page directly. Thanks!', 'projectyeti'));
  if ( post_password_required() ) { ?>
  <div id="comments">
    <div class="notice">
      <p class="bottom"><?php _e('This post is password protected. Enter the password to view comments.', 'projectyeti'); ?></p>
    </div>
  </div>
  <?php
    return;
  }
?>
<?php if ( have_comments() ) : ?>
  <div id="comments">
    <div class="callout">
      <h5 class="comment-counter"><?php comments_number(__('No Comments', 'projectyeti'), __('One Comment', 'projectyeti'), __('% Comments', 'projectyeti') ); ?></h5>
    </div>
    <ul class="no-bullet commentlist">
      <?php wp_list_comments('type=comment&callback=py_comments'); ?>
    </ul>
    <footer>
      <nav id="comments-nav">
        <div class="comments-previous"><?php previous_comments_link( __( '&larr; Older comments', 'projectyeti' ) ); ?></div>
        <div class="comments-next"><?php next_comments_link( __( 'Newer comments &rarr;', 'projectyeti' ) ); ?></div>
      </nav>
    </footer>
  </div>
<?php else : // this is displayed if there are no comments so far ?>
  <?php if ( comments_open() ) : ?>
  <?php else : // comments are closed ?>
  <div id="comments">
    <div class="notice">
      <p class="bottom"><?php _e('Comments disabled by administrator.', 'projectyeti') ?></p>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
  <h3><?php comment_form_title( __('Leave a Reply', 'projectyeti'), __('Leave a Reply to %s', 'projectyeti') ); ?></h3>
  <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p><?php printf( __('You must be <a href="%s">logged in</a> to post a comment.', 'projectyeti'), wp_login_url( get_permalink() ) ); ?></p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( is_user_logged_in() ) : ?>
    <p><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'projectyeti'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'projectyeti'); ?>"><?php _e('Log out &raquo;', 'projectyeti'); ?></a></p>
    <?php else : ?>
    <p>
      <label for="author"><?php _e('Name', 'projectyeti'); if ($req) _e(' (required)', 'projectyeti'); ?></label>
      <input type="text" class="five" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
    </p>
    <p>
      <label for="email"><?php _e('Email (will not be published)', 'projectyeti'); if ($req) _e(' (required)', 'projectyeti'); ?></label>
      <input type="text" class="five" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
    </p>
    <p>
      <label for="url"><?php _e('Website', 'projectyeti'); ?></label>
      <input type="text" class="five" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3">
    </p>
    <?php endif; ?>
    <p>
      <label for="comment"><?php _e('Comment', 'projectyeti'); ?></label>
      <textarea name="comment" id="comment" tabindex="4"></textarea>
    </p>
    <p id="allowed_tags" class="small"><strong>XHTML:</strong> <?php _e('You can use these tags:','projectyeti'); ?> <code><?php echo allowed_tags(); ?></code></p>
    <p><input name="submit" class="small radius button" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment', 'projectyeti'); ?>"></p>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; // endif for logged in or not ?>
</div>
<?php endif; // if you delete this you will die irl ?>