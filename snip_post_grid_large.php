<?php
  //there is really no difference between post_grid_large and regular aside from the image
  //we can't pass variables so I have to repeat myself
  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
  $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
?>

<a href="<?php the_permalink() ?>" class="post-item grid-1 inverse <?php if(has_post_thumbnail()) {echo 'bg-image';} else {echo 'bg-image-text';}?>"
  style='background-image: url("<?php echo $image[0] ?>");' title="<?php the_title() ?>">
  <span class="post-content">
    <h3 class="title"><?php the_title() ?></h3>
    <h4 class="subtitle"><?php if($summary !== ''){ echo get_post_meta($post->ID, "subtitle_value", $single = true); } ?></h4>
  </span>
</a>