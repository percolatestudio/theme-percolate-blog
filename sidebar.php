<div id="sidebar">
<!--	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) {} ?>-->

	<?php echo do_shortcode('[twitter-feed username="LauriePellicano"]'); ?>

	<div id="blog_necessaries">
  	<div class="column">
    	<div class="searchform">
    		<span class="icon12 search"></span>
    	  <form method="get" action="<?php bloginfo('url'); ?>/">
    	  	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="SEARCH" />
    	  </form>
    	</div>

    	<div class="social_fixed">
    	  <a class="icon16 rss inverse" href="<?php bloginfo('rss2_url'); ?>"><span>Subscribe RSS</span></a>
    	  <?php if (get_the_author_meta('twitter') != '') { ?>
      	  <a class="icon16 twitter inverse" href="<?php the_author_meta('twitter') ?>" rel="me"><span>Follow <?php the_author(); ?> on Twitter</span></a>
    	  <?php }; ?>
        <?php if(get_the_author_meta('facebook') != '') { ?>
          <a class="icon16 facebook inverse" href="<?php the_author_meta('facebook') ?>" rel="me"><span>Like <?php the_author(); ?> on Facebook</span></a>
        <?php }; ?>
    	</div>

      <div class="links">
        <h5 class="occasion"><span>Categories</span></h5>
        <ul><?php wp_list_categories('depth=-1&title_li=' ); ?></ul>
      </div>
    </div>

    <div class="column">
      <h5 class="occasion"><span>Recent</span></h5>
      <ul>
        <?php
          $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
          foreach ($postslist as $post) :
            setup_postdata($post);
        ?>
        <li class="entry">
        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <br/>
        <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,15); ?>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="about">
    <h5 class="occasion">Who</h5>
    <img src="" alt="" />
    <p>This site is the journal of baking and small insights into life. I hope you enjoy it.<br><em>&mdash;Laurie Ellen Pellicano</em></p>

    <h5 class="occasion">Contact</h5>
    <p><a href="mailto:<?php echo antispambot(get_the_author_email()); ?>?subject=Hello there"><?php echo antispambot(get_the_author_email()); ?></a></p>
    <h5 class="occasion">Design</h5>
    <p><a href="http://supernormal.us" title="Supernormal Design">Supernormal</a></p>
  </div>

</div>
