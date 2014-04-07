<?php get_header(); ?>

  <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

      <?php if(has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
      } ?>
      <header
        class="<?php if(has_post_thumbnail()) {echo 'has-image';}?>"
        style='background-image: url("<?php echo $large_image_url[0] ?>");' title="<?php the_title() ?>">
        <div class="hero-content">
          <h1 class="post-title"><?php the_title() ?></h1>
  		  	<h2 class="post-subtitle">
  	        <?php
  		  	  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
      		  if($summary !== ''){ echo $summary; }
            ?>
  		  	</h2>
        </div>
      </header>

		  	<div class="entry-wrapper">
		  	  <div class="entry formatting">
    		  	<?php the_content(); ?>
  		  		<?php wp_link_pages(); ?>
		  	  </div>
		  	  <div class="sidebar">

		  	    <?php include('snip_attribution.php'); ?>
		  	    <?php the_category();?>
            <?php include('snip_sociallinks.php'); ?>

    		  	<span class="date"><?php the_time('M j, Y'); ?></span>
    		  	<?php the_tags('<div class="list-horiz"><li><b>Tags: </b></li><li>','</li><li>','</li></div>'); ?>

  		    </div>
		  	</div>

		<?php endwhile; ?>
	<?php else : endif; ?>


	<?php
	  wp_reset_query();
	  global $withcomments;
	  $withcomments = 1;
	  comments_template();
	?>

  <?php include('snip_adjacentposts.php'); ?>

<?php get_footer(); ?>