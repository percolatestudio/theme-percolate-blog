<div class="comments-wrapper">
  <div class="comments">
    <?php
    	// Do not delete these lines
    	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    		die ('Please do not load this page directly. Thanks!');

    	if ( post_password_required() ) { ?>
    		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
    	<?php
    		return;
    	}
    ?>

    <div class="section-heading">
      <h3 class="section-title">
    	<?php comments_number(
      	'Comments',
      	'<span class="number">1</span> Comment',
      	'<span class="number">%</span> Comments' );?>
      </h3>
    </div>

    <!-- You can start editing here. -->
    <?php if ( have_comments() ) : ?>
    	<ol class="commentlist">
    	<?php wp_list_comments('type=comment&reverse_top_level=true&callback=my_comment&'); ?>
    	</ol>
    	<?php if(get_previous_comments_link() || get_next_comments_link() ) {?>
    	<div class="navigation">
    		<?php dr_previous_comments_link('&laquo; Previous comments', '<div class="prev_comment">', '</div>'); ?>
    		<?php dr_next_comments_link('Next comments &raquo;', '<div class="next_comment">', '</div>'); ?>
    	</div>
    	<?php } ?>
    <?php else : // this is displayed if there are no comments so far ?>
    	<?php if ( comments_open() ) : ?>
    		<!-- If comments are open, but there are no comments. -->
    	<?php else : // comments are closed ?>
    		<!-- If comments are closed. -->
    		<!-- <p class="nocomments">Comments are closed.</p> -->
    	<?php endif; ?>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
    	<div id="respond">
    		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    		<?php else : ?>
    			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">


  					<?php comment_id_fields(); ?>
      			<?php if ( is_user_logged_in() ) : ?>
      			  <p>
      				Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a>
      				</p>
      			<?php else : ?>

      			  <div class="input-symbol left">
      			    <!-- <label for="author"><strong>Name</strong></label> -->
      					<input class="text" type="text" name="author" id="author" placeholder="Name" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
      					<span class="icon-user"></span>
      			  </div>

              <div class="input-symbol left">
      			    <!-- <label for="email"><strong>Email</strong></label> -->
      					<input class="text" type="text" name="email" id="email" placeholder="Email Address" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
      					<span class="icon-email"></span>
              </div>
      			<?php endif; ?>

            <!-- <label for="comment">Comment</label> -->
            <textarea name="comment" placeholder="Share your thoughts" id="comment" cols="100%" rows="3" tabindex="3"></textarea>

      			<button name="submit" type="submit" id="submit" tabindex="4" class="btn-secondary">Comment</button>
      			<?php cancel_comment_reply_link('Cancel Reply'); ?>
    				<?php do_action('comment_form', $post->ID); ?>
    			</form>


    		<?php endif; // If registration required and not logged in ?>
    	</div>
    <?php endif; // if you delete this the sky will fall on your head ?>
  </div><!-- End comments -->
  <div class="sidebar">

  </div>
</div><!-- End comments-wrapper -->