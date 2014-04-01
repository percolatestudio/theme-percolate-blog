<?php get_header(); ?>

<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
    <?php include('snip_back.php'); ?>  
    
  	<?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
  			<div class="post">
          <h1 class="post_title"><?php the_title() ?></h1>
  				<div class="entry"><?php the_content(); ?></div>
  				
  				<?php if(is_page('About')) {?>
  				  <div class="focus contact">
  					  <h3 class="occasion">Contact</h3>
  					  <div>
  				  	  <h3 class="title"><strong>Laurie Ellen Pellicano</strong></h3>
                <ul class="contact">
                  <li><a class="icon16 envelope" href="mailto:<?php echo antispambot(get_the_author_email()); ?>?subject=Hello there"><?php echo antispambot(get_the_author_email()); ?></a></li>
                  <li><a class="icon16 twitter " href="<?php the_author_meta('twitter') ?>" rel="me">Follow me on Twitter</a></li>
                  <li><a class="icon16 facebook" href="<?php the_author_meta('facebook') ?>" rel="me">Like <?php bloginfo(); ?> on Facebook</a></li>
                </ul>
  				  	  <p>For inquiries &amp; answers or just make contact, do email me.</p>
  				  	  <p>Don&rsquo;t forget to <a class="inset" href="<?php bloginfo('rss2_url'); ?>"><span>subscribe</span></a>!</p>
  					  </div>
  				  </div>
  				<?php } ?>
  				
  			</div>
  		<?php endwhile; ?>
  	<?php else : endif;?>
    
    <?php include('snip_recent.php'); ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>