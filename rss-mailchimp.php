<?php
/**
 * Template Name: Custom RSS Template - Feedname
 */
$postCount = 5; // The number of posts to show in the feed
$posts = query_posts('showposts=' . $postCount);
header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:wfw="http://wellformedweb.org/CommentAPI/"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:atom="http://www.w3.org/2005/Atom"
  xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
  xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
  <?php do_action('rss2_ns'); ?>>
<channel>
  <title><?php bloginfo_rss('name'); ?> - Feed</title>
  <atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
  <link><?php bloginfo_rss('url') ?></link>
  <description><?php bloginfo_rss('description') ?></description>
  <lastBuildDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_lastpostmodified('GMT'), false); ?></lastBuildDate>
  <language><?php echo get_option('rss_language'); ?></language>
  <sy:updatePeriod><?php echo apply_filters( 'rss_update_period', 'hourly' ); ?></sy:updatePeriod>
  <sy:updateFrequency><?php echo apply_filters( 'rss_update_frequency', '1' ); ?></sy:updateFrequency>
  <?php do_action('rss2_head'); ?>
  <?php while(have_posts()) : the_post(); ?>
    <item>
      <title><?php the_title_rss(); ?></title>
      <link><?php the_permalink_rss(); ?></link>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');?>
      <media:content
        xmlns:media="http://search.yahoo.com/mrss/"
        url="<?php echo $image[0];?>"
        type="image" medium="image"
        width="100%"
        height="auto"/>
      <pubDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
      <dc:creator><?php the_author(); ?></dc:creator>
      <guid isPermaLink="false"><?php the_guid(); ?></guid>

      <?php
      $categories = get_the_category();
      foreach ( $categories as $category ) : ?>
        <category><?php echo $category->name; ?></category>
      <?php endforeach; ?>

      <description>
        <![CDATA[
          <b><?php
        	  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
      		  if($summary !== ''){ echo $summary; }
          ?></b>.
          <?php the_excerpt_rss() ?>
        ]]>
      </description>
      <content:encoded><![CDATA[<?php the_excerpt_rss() ?>]]></content:encoded>
      <?php rss_enclosure(); ?>
      <?php do_action('rss2_item'); ?>
    </item>
  <?php endwhile; ?>
</channel>
</rss>