<?php get_header(); ?>

  <header class="collage short">
    <div class="grid-2 square">
      <h1 class="title-page">
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
      <?php if (is_home()) { ?>
        <h2 class="description-page">Notes on
          <?php
          $args = array( 'parent' => 0 );
          $categories = get_categories( $args );
          foreach ( $categories as $index => $category ) : ?>
            <a class="monochrome" href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a><?php
              $categoriesLength = count($categories);
              if($index < $categoriesLength - 1) {
                // draw a comma or and
                if($index == $categoriesLength - 2) {
                  if ($categoriesLength == 2) {
                    echo " &amp; ";
                  } else {
                    echo ", and ";
                  }
                } else {
                  echo ", ";
                }
              }
            ?>
          <?php endforeach; ?>
        </h2>
      <?php } elseif (is_category()) { ?><h2 class="description-page"><?php $category=get_category($cat); echo $category->description; ?></h2>
      <?php } elseif (is_author()) { ?><h2 class="description-page"><?php echo $curauth->description; ?><?php } ?></h2>
    </div>
    <div class="social">

      <form action="https://percolatestudio.us3.list-manage.com/subscribe/post">
        <input type="hidden" name="u" value="4eaab348037bea8afae9acd5f">
        <input type="hidden" name="id" value="a118b8ae30">

        <div class="input-symbol left">
          <input name="EMAIL" type="email" size="20" value="" placeholder="Add your email">
          <span class="icon-email"></span>

        </div>
        <button type="submit" style="display:none;" name="subscribe" id="mc-embedded-subscribe"></button>
      </form>

      <a href="http://twitter.com/percolatestudio" class="monochrome" target="_blank"><span class="icon-twitter"></span></a>
      <a href="http://github.com/percolatestudio" class="monochrome" target="_blank"><span class="icon-github"></span></a>
      <a href="<?php bloginfo('rss2_url'); ?>" class="monochrome" target="_blank"><span class="icon-rss"></span></a>
    </div>
  </header>

  <?php if (have_posts()) :
	  $i = 0;
	 ?>
	  <div class="collage responsive">
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