<?php get_header(); ?>

<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">  
	<?php if (have_posts()) : ?>
	  <ul id="loop">
  		<?php while (have_posts()) : the_post(); $results++;?>
  			<li class="post">
    			<h3 class="post_title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="inset"><?php the_title() ?></a></h3>
    			<div class="metadata occasion">
            <?php the_category(''); ?>
            <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>&nbsp;&nbsp;&nbsp;
            <span class="date"><?php the_time('M jS Y'); ?></span>
  			  </div>
  				<div class="entry">
  					<?php the_content('read more'); ?>
  					<?php wp_link_pages(); ?>
  				</div>
  			</li>
  		<?php endwhile; ?>
		</ul>
		<div class="navigation"><?php dr_previous_posts_link('Newer entries', '<div class="back_btn">', '</div>'); ?><?php dr_next_posts_link('Older entries', '<div class="fwd_btn">', '</div>'); ?></div>
		
	<?php else : ?>

	<?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>