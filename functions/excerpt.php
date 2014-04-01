<?php
//
//Excerpt
//

//In practice: -begining php- $excerpt = get_the_excerpt();
//echo string_limit_words($excerpt,25); -end php-
//25 = number of words wanted
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
//this allows you to customize the excerpt. replacing the default ellipses with whatever you want!
function excerpt_ellipse($text) {
   return str_replace('[...]', ' <a class="more-link" href="'.get_permalink().'">read more</a>', $text); }
add_filter('the_excerpt', 'excerpt_ellipse','string_limit_words');
function get_pageid($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}
?>