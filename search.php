<?php get_header(); ?>

<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
  <div class="results">
    <h1 class="post_title">
      <?php
        global $wp_query;
        $results = $wp_query->found_posts;
        if (0 == $results) echo '&ldquo;'.wp_specialchars($s, 1).'&rdquo; hasn&rsquo;t been posted about yet!';
      	elseif (1 == $results) echo '' .$results . ' result for &ldquo;'.wp_specialchars($s, 1).'&rdquo;';
      	else echo '' .$results . ' results for &ldquo;'.wp_specialchars($s, 1).'&rdquo;';
      	?>
    </h1>
    <!--Fixme-->
  	<?php if (have_posts()) : ?>
  	  <ul id="loop">
    		<?php while (have_posts()) : the_post(); $results++; ?>
    			<?php include('snip_metalockup.php'); ?>
    		<?php endwhile; ?>
  		</ul>
			<div class="navigation"><?php dr_previous_posts_link('Newer entries', '<div class="back_btn"><span class="arrow"></span>', '</div>'); ?><?php dr_next_posts_link('Older entries', '<div class="fwd_btn"><span class="arrow"></span>', '</div>'); ?></div>
			<p class="sub_title"><strong>Search again?</strong></p>
  	<?php else : ?>
      <p class="subtitle">Try searching again.</p>
  	<?php endif; ?>
  	<?php include('snip_searchform.php'); ?>
  	<?php include('snip_recent.php'); ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>