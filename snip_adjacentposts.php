<div class="collage">
  <?php
    //previous post
    $in_same_cat = false;
    $excluded_categories = '';
    $previous = true;
    $previous_post = get_adjacent_post($in_same_cat,$excluded_categories,$previous);

    //previous post values
    $previous_title = $previous_post->post_title;
    $previous_link = get_permalink( $previous_post->ID );
    $previous_summary = get_post_meta($previous_post->ID, "subtitle_value", $single = true);
    $previous_image = wp_get_attachment_image_src( get_post_thumbnail_id($previous_post->ID), 'medium');
    $previous_image_large = wp_get_attachment_image_src( get_post_thumbnail_id($previous_post->ID), 'large');

    //next post
    $in_same_cat = false;
    $excluded_categories = '';
    $previous = false;
    $next_post = get_adjacent_post($in_same_cat,$excluded_categories,$previous);

    //next post values
    $next_title = $next_post->post_title;
    $next_link = get_permalink( $next_post->ID );
    $next_summary = get_post_meta($next_post->ID, "subtitle_value", $single = true);
    $next_image = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'medium');
    $next_image_large = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'large');

  ?>

  <?php if(get_adjacent_post(false, '', true) and get_adjacent_post(false, '', false)) { //if there is a next & previous post show it ?>
    <a href="<?php echo $previous_link; ?>" class="post-item grid-2-square inverse <?php if(has_post_thumbnail($previous_post->ID)) {echo 'bg-image';} else {echo 'bg-image-text';}?>"
      style='background-image: url("<?php echo $previous_image[0] ?>");' title="<?php echo $previous_title; ?>">
      <span class="subtitle-item">Previous Post</span>
      <span class="post-content">
        <h3 class="title"><?php echo $previous_title; ?></h3>
        <h4 class="subtitle"><?php if($previous_summary !== ''){ ?><?php  echo $previous_summary; ?><?php } ?></h4>
      </span>
    </a>
    <a href="<?php echo $next_link; ?>" class="post-item grid-2-square inverse <?php if(has_post_thumbnail($next_post->ID)) {echo 'bg-image';} else {echo 'bg-image-text';}?>"
      style='background-image: url("<?php echo $next_image[0] ?>");' title="<?php echo $next_title; ?>">
      <span class="subtitle-item">Next Post</span>
      <span class="post-content">
        <h3 class="title"><?php echo $next_title; ?></h3>
        <h4 class="subtitle"><?php if($next_summary !== ''){ ?><?php  echo $next_summary; ?><?php } ?></h4>
      </span>
    </a>
  <?php } else { ?>
    <?php if(get_adjacent_post(false, '', false)) { //if there is a next post ?>
      <a href="<?php echo $next_link; ?>" class="post-item grid-1 inverse <?php if(has_post_thumbnail($next_post->ID)) {echo 'bg-image';} else {echo 'bg-image-text';}?>"
        style='background-image: url("<?php echo $next_image_large[0] ?>");' title="<?php echo $next_title; ?>">
        <span class="subtitle-item">Next Post</span>
        <span class="post-content">
          <h3 class="title"><?php echo $next_title; ?></h3>
          <h4 class="subtitle"><?php if($next_summary !== ''){ ?><?php  echo $next_summary; ?><?php } ?></h4>
        </span>
      </a>
    <?php } else { ?>
      <a href="<?php echo $previous_link; ?>" class="post-item grid-1 inverse <?php if(has_post_thumbnail($previous_post->ID)) {echo 'bg-image';} else {echo 'bg-image-text';}?>"
        style='background-image: url("<?php echo $previous_image_large[0] ?>");' title="<?php echo $previous_title; ?>">
        <span class="subtitle-item">Previous Post</span>
        <span class="post-content">
          <h3 class="title"><?php echo $previous_title; ?></h3>
          <h4 class="subtitle"><?php if($previous_summary !== ''){ ?><?php  echo $previous_summary; ?><?php } ?></h4>
        </span>
      </a>
    <?php } ?>
  <?php } ?>
</div>
