<div class="posts-grid">
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


  ?>
  <?php if(get_adjacent_post(false, '', true)) {?>
  <div class="post <?php if(has_post_thumbnail($previous_post->ID)) {echo 'has-image';}?>"
    style='background-image: url("<?php echo $previous_image[0] ?>");' title="<?php echo $previous_title; ?>">
    <div class="post-content">
      <h3 class="title">
        <a class="inverse" href="<?php echo $previous_link; ?>" rel=""><?php echo $previous_title; ?></a>
      </h3>
      <h4 class="subtitle">
        <?php if($previous_summary !== ''){ ?>
          <?php  echo $previous_summary; ?>
        <?php } ?>
      </h4>
    </div>
  </div>
  <?php }?>


  <?php if(get_adjacent_post(false, '', false)) {?>
  <div class="post <?php if(has_post_thumbnail($next_post->ID)) {echo 'has-image';}?>"
    style='background-image: url("<?php echo $next_image[0] ?>");' title="<?php echo $next_title; ?>">

    <div class="post-content">
      <h3 class="title">
        <a class="inverse" href="<?php echo $next_link; ?>"><?php echo $next_title; ?></a>
      </h3>
      <h4 class="subtitle">
        <?php if($next_summary !== ''){ ?>
          <?php  echo $next_summary; ?>
        <?php } ?>
      </h4>
    </div>
  </div>
  <?php } ?>
</div>