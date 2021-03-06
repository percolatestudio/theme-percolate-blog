<?php
  // Path constants
  define('THEMELIB', TEMPLATEPATH . '/functions/');

  include(THEMELIB . 'breadcrumb.php');
  include(THEMELIB . 'custom-summary.php');
  include(THEMELIB . 'custom-rss.php');
  include(THEMELIB . 'comments-reply.php');
  include(THEMELIB . 'enable_wp.php');
  include(THEMELIB . 'excerpt.php');
  include(THEMELIB . 'misc.php');
  include(THEMELIB . 'my_comments.php');
  include(THEMELIB . 'media_class.php');
  include(THEMELIB . 'navigation.php');
  include(THEMELIB . 'settings_social.php');
  include(THEMELIB . 'social.php');
  include(THEMELIB . 'post_images.php');
  include(THEMELIB . 'public-preview-settings.php');
  include(THEMELIB . 'remove-jetpack-opengraph-tags.php');

  // Remove the WordPress Generator – via http://blog.ftwr.co.uk/archives/2007/10/06/improving-the-wordpress-generator/
  function remove_generators() { return ''; }
  add_filter('the_generator','remove_generators');

  //scripts
  function my_scripts_method() {
    if (!is_admin()) {
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js');
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script('blog', get_template_directory_uri() . '/js/blog.js',array('jquery'), false, '1.0', true);
      wp_enqueue_script('prism', get_template_directory_uri() . '/js/prism.js',array(), false, '1.0', true);
      wp_enqueue_script('fastclick', get_template_directory_uri() . '/js/fastclick.js',array(), false, '1.0', true);
      //wp_enqueue_script('gfycat', get_template_directory_uri() . '/js/gfycat_test.js',array(), false, '1.0', true);
      wp_enqueue_script('gfycat', get_template_directory_uri() . '/js/gfycat_test.min.js',array(), false, '1.0', true);
      wp_enqueue_script('jquery-social', get_template_directory_uri() . '/js/jquery.social.js',array('jquery'), false, '1.0', true);
      wp_enqueue_script('lodash', get_template_directory_uri() . '/js/lodash.min.js',array(), false, '1.0', true);
      wp_enqueue_script('autosize', get_template_directory_uri() . '/js/jquery.autosize.min.js',array('jquery'), false, '1.0', true);
      wp_enqueue_script('react', get_template_directory_uri() . '/js/react-with-addons-0.12.2.min.js',array(), false, '1.0', true);
      wp_enqueue_script('percolate-contact', get_template_directory_uri() . '/js/percolate-contact-form.min.js',array(), false, '1.0', true);
    }
    if (is_singular()) { wp_enqueue_script('comment-reply',false,array('jquery')); }
  }
  add_action('wp_enqueue_scripts', 'my_scripts_method');

?>