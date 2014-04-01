<?php get_header(); ?>
<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
    <h1 class="post_title">Page not found</h1>
    <p class="subtitle">Sorry, the post or page you were looking for cannot be found. Try searching for it.</p>   
    <?php include('snip_searchform.php'); ?>   	  
    <?php include('snip_recent.php'); ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>