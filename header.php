<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

<head>
  <!-- boilerplate -->
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1;<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, width=device-width">

	<!-- seo -->
	<title><?php wp_title('| ', true, 'right');?><?php echo get_bloginfo('name');?></title>

	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post();
	  $subtitle = get_post_meta($post->ID, "subtitle_value", $single = true);
	  if(has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); }
  ?>
    <!-- If we're on a single post or page -->
    <meta name="description" content="<?php echo $subtitle; ?>" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@<?php echo get_option('twitter');?>">
    <meta name="twitter:title" content="<?php wp_title(''); ?>">
    <meta name="twitter:description" content="<?php echo $subtitle; ?>">
    <meta name="twitter:creator" content="@<?php the_author_meta('twitter') ?>">
    <meta name="twitter:image" content="<?php echo $large_image_url[0] ?>">

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
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.png">
	<?php wp_head(); ?>

	<!-- styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/css/views/print.css" />
	<link rel='stylesheet' type="text/css" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic|Lora' >

	<?php automatic_feed_links(); ?>
	<!--[if lt IE 9]>
  	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body <?php body_class($class); ?> lang="en">

  <a class="menu-toggle"><span class="icon-percolate2"></span></a>
  <?php include('snip_menu.php'); ?>

  <div class="content-overlay"><!-- invisible screen to intercept clicks when menu is open --></div>
  <div class="content">