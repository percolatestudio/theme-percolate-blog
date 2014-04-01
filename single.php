<?php get_header(); ?>

<div id="content" class="<?php if ( has_post_thumbnail() ) {echo 'has-image';}?>">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

      <?php if ( has_post_thumbnail()) {
       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
       echo '<div class="post-hero" style=" background-image: url(' . $large_image_url[0] . ')"" ></div>';
       ;
 }?>

		  	<div class="entry-wrapper">
		  	  <div class="entry">
  		  	  <h1 class="post-title"><?php the_title() ?></h1>
    		  	<h2 class="post-subtitle">
      		  	<?php
      		  	  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
          		  if($summary !== ''){ echo $summary; }
                ?>
    		  	</h2>

    		  	<div class="formatting">
    		  		<?php the_content(); ?>
    		  	</div>

  		  		<?php wp_link_pages(); ?>
		  	  </div>
		  	  <div class="sidebar">
            <?php echo get_avatar( get_the_author_meta('user_email'), $size = '72'); ?>
            <div class="author">By  <?php the_author_posts_link(); ?></div>
    		  	<span class="date"><?php the_time('M jS Y'); ?></span>
    		  	<?php the_tags('<div class="list-horiz"><li><b>Tags: </b></li><li>','</li><li>','</li></div>'); ?>
  		    	<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>&nbsp;&nbsp;&nbsp;


  		    	<?php // include('snip_sociallinks.php'); ?>
  		    </div>
		  	</div>



		  </div>

      <?php // include('snip_recent.php'); ?>

		<?php endwhile; ?>
	<?php else : ?>
  	<p>404</p>
	<?php endif; ?>
	<?php
	  wp_reset_query();
	  global $withcomments;
	  $withcomments = 1;
	  comments_template();
	?>
  <?php // get_sidebar(); ?>
</div>

<?php get_footer(); ?>