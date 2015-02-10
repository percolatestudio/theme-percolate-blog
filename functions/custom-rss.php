<?php
//Custom RSS
  add_action('init', 'customRSS');
  function customRSS(){
    add_feed('mailchimp', 'customRSSFunc');
  }

  function customRSSFunc(){
    get_template_part('rss', 'mailchimp');
  }
?>