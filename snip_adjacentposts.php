<div class="posts-twoup">

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
    $previous_image = wp_get_attachment_image_src( get_post_thumbnail_id($previous_post->ID), 'large');

    //next post
    $in_same_cat = false;
    $excluded_categories = '';
    $previous = false;
    $next_post = get_adjacent_post($in_same_cat,$excluded_categories,$previous);

    //next post values
    $next_title = $next_post->post_title;
    $next_link = get_permalink( $next_post->ID );
    $next_summary = get_post_meta($next_post->ID, "subtitle_value", $single = true);
    $next_image = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'large');


  ?>
  <?php if(get_adjacent_post(false, '', true)) {?>
  <div class="post <?php if(has_post_thumbnail($previous_post->ID)) {echo 'has-image';}?>"
    style='background-image: url("<?php echo $previous_image[0] ?>");'>
    <div class="post-content">
      <h3 class="title">
        <a class="inverse" href="<?php echo $previous_link; ?>"><?php echo $previous_title; ?></a>
      </h3>
      <h4>
        <?php if($previous_summary !== ''){ ?>
          <div class="subtitle"><?php  echo $previous_summary; ?></div>
        <?php } ?>
      </h4>
      <div class="attribution">By
        <?php
          $coauthors = get_coauthors($previous_post->ID);

          foreach ($coauthors as $index => $coauthor) :
            $author_posts_url = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename );
        ?>
          <a class="author inverse" href="<?php echo $author_posts_url; ?>"><?php echo $coauthor->display_name; ?></a><span><?php
              $coauthorsLength = count($coauthors);
              if($index < $coauthorsLength - 1) {
                // draw a comma or and
                if($index == $coauthorsLength - 2) {
                  if ($coauthorsLength == 2) {
                    echo " &amp; ";
                  } else {
                    echo " and ";
                  }
                } else {
                  echo ", ";
                }
              }
            ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php }?>


  <?php if(get_adjacent_post(false, '', false)) {?>
  <div class="post <?php if(has_post_thumbnail($next_post->ID)) {echo 'has-image';}?>"
    style='background-image: url("<?php echo $next_image[0] ?>");'>

    <div class="post-content">
      <h3 class="title">
        <a class="inverse" href="<?php echo $next_link; ?>"><?php echo $next_title; ?></a>
      </h3>
      <h4>
        <?php if($next_summary !== ''){ ?>
          <div class="subtitle"><?php  echo $next_summary; ?></div>
        <?php } ?>
      </h4>
      <div class="attribution">By
        <?php
          $coauthors = get_coauthors($next_post->ID);

          foreach ($coauthors as $index => $coauthor) :
            $author_posts_url = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename );
        ?>
          <a class="author inverse" href="<?php echo $author_posts_url; ?>"><?php echo $coauthor->display_name; ?></a><span><?php
              $coauthorsLength = count($coauthors);
              if($index < $coauthorsLength - 1) {
                // draw a comma or and
                if($index == $coauthorsLength - 2) {
                  if ($coauthorsLength == 2) {
                    echo " &amp;";
                  } else {
                    echo " and";
                  }
                } else {
                  echo ",";
                }
              }
            ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php } ?>
</div>