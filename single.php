<?php get_header(); ?>

<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
    <?php include('snip_back.php'); ?>
    
  	<?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
  		  <div class="post">
  		  	<h1 class="post_title"><?php the_title() ?></h1>
  		  	<div class="metadata occasion">
  		    	<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>&nbsp;&nbsp;&nbsp;
  		    	<span class="date"><?php the_time('M jS Y'); ?></span>
  		    </div>
  		  	<div class="entry">
  		  		<?php the_content(); ?>
  		  		<?php wp_link_pages(); ?>
  		  	</div>
  		    <?php include('snip_sociallinks.php'); ?>	
  		  	<?php the_tags('<ul><li><b>Tags: </b></li><li>','</li><li>','</li></ul>'); ?>
  		  </div>
        
        <?php include('snip_recent.php'); ?>  			
  			
  		<?php endwhile; ?>
  	<?php else : ?>
  	<p>The sound of emptiness</p>
  	<?php endif; ?>
  	<?php 
  	  wp_reset_query();
  	  global $withcomments;
  	  $withcomments = 1;
  	  comments_template();
  	?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>