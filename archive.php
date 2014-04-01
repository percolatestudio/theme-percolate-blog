<?php get_header(); ?>

<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
    <?php include('snip_back.php'); ?>  
      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <div class="post">
        <h1 class="post_title">
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
        <?php if(is_category('Recipes')) { ?>
          <div class="archive_nav">
      	    <a class="occasion type current">By Type</a>
      	    <a class="occasion type">By Ingredient</a>
      	    <a class="occasion type">Search Recipes</a>
      	  </div>
      	  <div class="slides">
        	  <ul class="recipes archive_list"> 
          	  <?php 
          	    $category = get_category_by_slug('Recipes');
          	    $catid = $category->term_id;
            	  wp_list_categories('orderby=id&show_count=1&title_li=&child_of='.$catid.''); 
          	  ?>
        	  </ul>
        	  
            <?php
              $taxonomy = 'ingredient';
              $queried_term = get_term_by( 'slug', get_query_var($taxonomy) );
              $terms = get_terms($taxonomy);
              if ($terms) {
                echo '<ul class="'.$taxonomy.' archive_list hide">';
                foreach($terms as $term) {
                  echo '<li><a href="' .get_term_link($term->slug, 'ingredient') . '">' . $term->name .'</a></li>';
                }
                echo '</ul>';
              }
            ?>
        
        	  <div class="searchform hide">
        	  	<span class="icon12 search"></span>
        	    <form method="get" action="<?php bloginfo('url'); ?>/">
        	    	<input type="text" name="s" id="s" placeholder="Search again" />
        	    	<input type="hidden" value="<?php echo ''.$catid.'' ?>" name="cat" id="scat" />
        	    </form>
        	  </div>
      	  </div><!--end slides-->
      	<?php }else{ ?>
      	  <?php if (have_posts()) : ?>
      	  	<ul id="loop">
      	  		<?php while (have_posts()) : the_post(); $results++; ?>
      	  			<?php include('snip_metalockup.php'); ?>
      	  		<?php endwhile; ?>
      	  	</ul>
      	  		<div class="navigation"><?php dr_previous_posts_link('Newer entries', '<div class="back_btn"><span class="arrow"></span>', '</div>'); ?><?php dr_next_posts_link('Older entries', '<div class="fwd_btn"><span class="arrow"></span>', '</div>'); ?></div>
      	  <?php else : ?>    
      	  <?php endif; ?>
      	<?php } ?>
      </div>
    <?php include('snip_recent.php'); ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>