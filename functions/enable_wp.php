<?php
//
//Enable WP3 functions
//

//thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 'thumbnail' ); 
  
//sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title">',
		'after_title' => '</div>',
	));
}

//CUSTOM MENUS
function register_custom_menu() {
  register_nav_menus(
    array(
      'header_menu' => __('Header Menu')
    )
  );
}
add_action('init', 'register_custom_menu');


?>