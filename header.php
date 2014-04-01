<!doctype html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

<head>
  <!-- boilerplate -->
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1;<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, width=device-width">

	<!-- seo -->
	<title><?php wp_title(''); ?></title>
	<meta name="template" content="<?php wp_title(''); ?> blog" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- blog -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.png">
	<?php wp_head(); ?>

	<!-- styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/stylesheets/css/print.css" />
	<link rel='stylesheet' type="text/css" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic|Lora' >

	<?php automatic_feed_links(); ?>
	<!--[if lt IE 9]>
  	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body <?php body_class($class); ?> lang="en">
  <!-- Prompt IE 6 users to install Chrome Frame. -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->