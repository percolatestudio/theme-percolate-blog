<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

<head>
  <!-- boilerplate -->
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1;<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, width=device-width">

	<!-- seo -->

	<title><?php wp_title('');?></title>

  <?php if ( is_attachment() || is_404() ) { ?>
  	<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post();
	  $subtitle = get_post_meta($post->ID, "subtitle_value", $single = true);
	  if(has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); }
  ?>
    <!-- If we're on a single post or page -->
    <meta name="description" content="<?php echo $subtitle; ?>" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@<?php echo get_option('twitter');?>">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description" content="<?php echo $subtitle; ?>">
    <meta name="twitter:creator" content="@<?php the_author_meta('twitter') ?>">
    <meta name="twitter:image" content="<?php echo $large_image_url[0]; ?>">

    <?php foreach((get_the_category()) as $category) {?>
      <meta property="article:tag" content="<?php echo $category->cat_name . ''; ?>" />
    <?php }?>

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php wp_title(''); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>" />
    <meta property="og:image" content="<?php echo $large_image_url[0] ?>" />
    <meta property="og:description" content="<?php echo $subtitle; ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('name')?>" />
    <meta property="fb:admins" content="Facebook numeric ID" />

  <?php endwhile; endif; elseif(is_home()) : ?>
    <!-- If we're on the home page -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />

  <?php endif; ?>



	<!-- blog -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.png?v2">
	<?php wp_head(); ?>

	<!-- styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/css/views/print.css" />

	<?php automatic_feed_links(); ?>
	<!--[if lt IE 9]>
  	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body <?php body_class($class); ?> lang="en">

  <div class="overlay-screen-contact"></div>
  <?php include('snip_menuoverlay.php'); ?>

  <div class="content">
    <nav>
      <div class="nav-group">
        <a href="http://percolatestudio.com/">Home</a>
        <a href="http://percolatestudio.com/how">How</a>
        <a href="http://percolatestudio.com/what">What</a>
        <a data-menu>Menu</a>
      </div>

      <a href="http://percolatestudio.com/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg"/></a>

      <div class="nav-group right">
        <a href="http://percolatestudio.com/careers">Join</a>
        <a href="http://blog.percolatestudio.com" class="active">Blog</a>
        <a data-contact>Contact</a>
      </div>
    </nav>