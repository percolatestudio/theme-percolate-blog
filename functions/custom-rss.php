<?php
//Custom RSS
  add_action('init', 'customRSS');
  function customRSS(){
    add_feed('mailchimp', 'customRSSFunc');
  }

  global $wp_rewrite;
  $wp_rewrite->flush_rules();

  function customRSSFunc(){
    get_template_part('rss', 'mailchimp');
  }
?>