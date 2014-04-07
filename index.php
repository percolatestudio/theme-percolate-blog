<?php get_header(); ?>

  <header class="default">
    <h1 class="page-title">Percolate Blog</h1>
  </header>

	<?php if (have_posts()) :
	  $i = 0;
	 ?>
	  <div class="posts-grid">
  		<?php while (have_posts()) : the_post(); $i++; ?>
  			<?php if ($i == 1 or $i == 6 and $paged < 1) :?>
    			<?php include('snip_post_grid_large.php'); ?>
      	<?php else: ?>
    			<?php include('snip_post_grid.php'); ?>
      	<?php endif;?>
  		<?php endwhile; ?>
	  </div>
		<div class="navigation">
		  <?php dr_previous_posts_link('Previous', '', ''); ?>
		  <?php dr_next_posts_link('Next', '', ''); ?>
	  </div>
	<?php else : ?>
	<?php endif; ?>

<?php get_footer(); ?>