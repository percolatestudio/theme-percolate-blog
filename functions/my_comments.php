<?php
//
//Custom comments
//

if ( ! function_exists( 'my_comment' ) ) :
/**
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
  function my_comment($comment, $args, $depth) {
     $GLOBALS['comment'] = $comment; ?>
     <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
       <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-attribution">
          <span class="comment-author vcard">
            <?php echo get_avatar( $comment->comment_author_email, 48 ); ?>
            <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?></span><br/>
          <small class="comment-meta occasion"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>" title="<?php printf(__('%1$s at %2$s'), get_comment_date('M j, Y'), get_comment_time()) ?>"><?php printf(__('%1$s'), get_comment_date('M j, Y')) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></small>
        </div>
        <div class="comment-text">
          <?php if ($comment->comment_approved == '0') : ?>
             <em><?php _e('Your comment is awaiting moderation.') ?></em>
             <br />
          <?php endif; ?>

          <?php comment_text() ?>
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
       </div>
  <?php
          }

endif; // ends check for my_comment()
?>