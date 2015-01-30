<?php get_header(); ?>

  <header class="default">
    <h1 class="page-title">
      <?php $post = $posts[0]; // Hack for the_date() functionality ?>
      <?php if (is_home()) { ?><?php echo get_bloginfo('name');?>
      <?php } elseif (is_category()) { ?><?php single_cat_title(); ?>
      <?php } elseif( is_tag() ) { ?>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;
      <?php } elseif (is_day()) { ?><?php the_time('F jS, Y'); ?>
      <?php } elseif (is_day()) { ?><?php the_time('F jS, Y'); ?>
      <?php } elseif (is_month()) { ?><?php the_time('F, Y'); ?>
      <?php } elseif (is_year()) { ?><?php the_time('Y'); ?>
      <?php } elseif (is_author()) { ?>
        <?php
          if(get_query_var('author_name')) :
              $curauth = get_user_by('slug', get_query_var('author_name'));
          else :
              $curauth = get_userdata(get_query_var('author'));
          endif;
          echo $curauth->display_name;
        ?>
      <?php } else { ?><?php single_cat_title(); ?>
      <?php } ?>
    </h1>
    <?php if (is_home()) { ?><h2 class="page-subtitle">Notes on <ul><?php wp_list_categories('title_li=');?></ul></h2>
    <?php } elseif (is_category()) { ?><h2 class="page-subtitle"><?php $category=get_category($cat); echo $category->description; ?></h2>
    <?php } elseif (is_author()) { ?><h2 class="page-subtitle"><?php echo $curauth->description; ?><?php } ?>
  </header>

  <?php if (have_posts()) :
	  $i = 0;
	 ?>
	  <div class="collage">
  		<?php while (have_posts()) : the_post(); $i++; ?>
  			<?php if ($i == 1 or $i == 6 and $paged < 1) :?>
    			<?php include('snip_post_grid_large.php'); ?>
      	<?php else: ?>
    			<?php include('snip_post_grid.php'); ?>
      	<?php endif;?>
  		<?php endwhile; ?>
	  </div>
		<div class="navigation"><?php dr_previous_posts_link('Previous', '', ''); ?><?php dr_next_posts_link('Next', '', ''); ?></div>
	<?php else : ?>
	<?php endif; ?>

<?php get_footer(); ?>