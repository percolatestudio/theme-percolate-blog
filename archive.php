<?php get_header(); ?>

  <header class="default">
    <h1 class="page-title">
      <?php $post = $posts[0]; // Hack for the_date() functionality ?>
      <?php if (is_category()) { ?><?php single_cat_title(); ?>
      <?php } elseif( is_tag() ) { ?>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
      <?php } elseif (is_day()) { ?><?php the_time('F jS, Y'); ?>
      <?php } elseif (is_day()) { ?><?php the_time('F jS, Y'); ?>
      <?php } elseif (is_month()) { ?><?php the_time('F, Y'); ?>
      <?php } elseif (is_year()) { ?><?php the_time('Y'); ?>
      <?php } elseif (is_author()) { ?>Author Archive
      <?php } else { ?><?php single_cat_title(); ?>
      <?php } ?>
    </h1>
    <h2 class="page-subtitle">
      <?php $category=get_category($cat); echo $category->description; ?>
    </h2>
  </header>

  <?php
		query_posts($query_string.'&posts_per_page=4');
		if (have_posts()) :
		$i = 0; ?>
    <div class="posts-grid">
      <?php while (have_posts()) : the_post(); $i++; ?>
        <?php if ($i == 1 or $i == 6 and $paged < 1) :?>
    			<?php include('snip_post_grid_large.php'); ?>
      	<?php else: ?>
    			<?php include('snip_post_grid.php'); ?>
      	<?php endif;?>
      <?php endwhile; ?>
    </div>
  		<div class="navigation"><?php dr_previous_posts_link('Newer entries', '<div class="back_btn"><span class="arrow"></span>', '</div>'); ?><?php dr_next_posts_link('Older entries', '<div class="fwd_btn"><span class="arrow"></span>', '</div>'); ?></div>
  <?php else : ?>
  <?php endif; ?>



<?php get_footer(); ?>