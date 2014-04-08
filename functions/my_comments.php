<?php
//
//Custom comments
//

if ( ! function_exists( 'my_comment' ) ) :
/**
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
  function my_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>

     <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>" class="vcard">
      <div class="comment-lockup">
        <span class="avatar-wrapper"><?php echo get_avatar( $comment->comment_author_email, 48 ); ?></span>
        <div class="meta">

          <div class="formatting">
            <?php if ($comment->comment_approved == '0') : ?>
              <div class="note"><?php _e('Your comment is awaiting moderation.') ?></div>
            <?php endif; ?>
            <span class="name"><?php echo get_comment_author();?></span>
            <?php comment_text() ?>
          </div>

          <a class="date" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date('M j, Y')) ?></a>
          <span class="bullet"></span>
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          <?php edit_comment_link(__('Edit'),'<span class="bullet"></span>','') ?>
        </div>
      </div>
  <?php
  }
endif; // ends check for my_comment()
?>