<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>
<div id="content">
  <?php include('snip_fore.php'); ?>
  <div id="feed">
    <?php include('snip_back.php'); ?>  
    <div class="post">
      <h1 class="post_title"><?php the_title() ?></h1>    	
    	<div class="archive_nav">
    	    <a class="occasion type current">By Category</a>
    	    <a class="occasion type">By Date</a>
    	    <a class="occasion type">Search Archives</a>
    	  </div>
    	  <div class="slides">
    		  <ul class="archive_list"> 
    	  	  <?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
    		  </ul>
    		  
    		  <ul class="archive_list hide">
    	    <?php wp_get_archives() ?>
        	</ul>
        	
    		  <div class="searchform hide">
    		  	<span class="icon12 search"></span>
    		    <form method="get" action="<?php bloginfo('url'); ?>/">
    		    	<input type="text" name="s" id="s" placeholder="Search again" />
    		    	<input type="hidden" value="<?php echo ''.$catid.'' ?>" name="cat" id="scat" />
    		    </form>
    		  </div>
    	  </div><!--end slides-->
    </div>
    <?php include('snip_recent.php'); ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>