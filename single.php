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
        <h1 class="post-title"><?php the_title(); ?></h1>
		  	<h2 class="post-subtitle">
	        <?php
		  	  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
    		  if($summary !== ''){ echo $summary; }
          ?>
		  	</h2>
      </div>

      <div class="attribution">
        <?php if ( function_exists( 'coauthors_posts_links' ) ) { ?>

          <?php foreach( get_coauthors() as $coauthor ) : ?>
            <div class="author">
              <?php $author_posts_url = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ); ?>
              <a class="avatar-wrapper" href="<?php echo $author_posts_url; ?>"><?php echo get_avatar( $coauthor->user_email, '72' ); ?></a>
              <a class="name inverse" rel="author" href="<?php echo $author_posts_url; ?>"><?php echo $coauthor->display_name; ?></a>
            </div>
          <?php endforeach; ?>

        <?php } else { ?>

          <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )) ?>"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '64'); ?></a>
          By <?php the_author_posts_link();?>

        <?php }?>
        <div class="metadata"><span>Published</span> <?php the_time('M j, Y'); ?> <span>in</span> <?php the_category(', '); ?></div>
      </div>
    </header>

  	<div class="wrapper-content">
  	  <div class="entry formatting">
		  	<?php the_content(); ?>
	  		<?php wp_link_pages(); ?>

        <div class="callout-newsletter">
          <div class="title-callout">Get the Newsletter</div>

  	  		<form class="fieldset" action="https://percolatestudio.us3.list-manage.com/subscribe/post">
            <input type="hidden" name="u" value="4eaab348037bea8afae9acd5f">
            <input type="hidden" name="id" value="a118b8ae30">

            <div class="input-symbol left">
              <input name="EMAIL" type="email" size="20" value="" placeholder="Add your email to get the latest news & articles like this">
              <span class="icon-email"></span>
            </div>
            <button type="submit" style="display:none;" name="subscribe" id="mc-embedded-subscribe"></button>
          </form>
        </div>
  	  </div>
  	</div>

	<?php endwhile; ?>
	<?php else : endif; ?>

  <section class="section-ancillary">
    <div class="byline">
      <div class="title-section">Author</div>
      <div class="attribution">
        <?php if ( function_exists( 'coauthors_posts_links' ) ) { ?>

          <?php foreach( get_coauthors() as $coauthor ) : ?>
            <div class="author">
              <?php $author_posts_url = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ); ?>
              <a class="avatar-wrapper" href="<?php echo $author_posts_url; ?>"><?php echo get_avatar( $coauthor->user_email, '72' ); ?></a>
              <div class="meta">
                <div class="subtitle-section"><?php echo $coauthor->display_name; ?></div>
                <p class="description"><?php echo $coauthor->description; ?></p>
                <?php if(get_the_author_meta('twitter', $coauthor->ID) != '') { ?>
                  <a class="monochrome" target="_blank" href="http://twitter.com/<?php the_author_meta('twitter', $coauthor->ID) ?>">Follow @<?php the_author_meta('twitter', $coauthor->ID) ?></a>
                <?php } ?>
                <a class="monochrome" rel="author" href="<?php echo $author_posts_url; ?>">View posts</a>
              </div>
            </div>
          <?php endforeach; ?>

        <?php } else { ?>

          <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )) ?>"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '72'); ?></a>
          By <?php the_author_posts_link();?>

        <?php }?>
      </div>
    </div>
    <div class="social">
      <div class="title-section">Share
        <a class="title-section-action monochrome" href="<?php bloginfo('url'); ?>/?feed=mailchimp" target="_blank">Subscribe</a>
      </div>
      <a data-twitter="button" class="link-social twitter">
        <span class="wrapper-count">
          <span data-twitter="counter" class="count-social">-</span>
          <span class="name-social">Twitter</span>
        </span>
      </a>

      <a data-hackernews="button" class="link-social hackernews">
        <span class="wrapper-count">
          <span data-hackernews="counter" class="count-social">-</span>
          <span class="name-social">Hacker<br>News</span>
        </span>
      </a>

      <!-- More info on FB share -->
      <a data-facebook="button" class="link-social facebook">
        <span class="wrapper-count">
          <span data-facebook="counter" class="count-social">-</span>
          <span class="name-social">Facebook</span>
        </span>
      </a>
    </div>
	</section>
	<?php
	  wp_reset_query();
	  global $withcomments;
	  $withcomments = 1;
	  comments_template();
	?>

  <?php include('snip_adjacentposts.php'); ?>

<?php get_footer(); ?>