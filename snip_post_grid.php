<?php
  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
  $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
?>

<div class="post <?php if ( has_post_thumbnail() ) {echo 'has-image';}?>"
  style='background-image: url("<?php echo $image[0] ?>");' title="<?php the_title() ?>">
  <div class="post-content">
    <h3 class="title">
      <a class="inverse" href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h3>
    <h4>
      <?php if($summary !== '') { ?>
        <div class="subtitle"><?php echo get_post_meta($post->ID, "subtitle_value", $single = true);?></div>
      <?php  }else{ ?>
        <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,10); ?>
      <?php } ?>
    </h4>
  </div>
</div>