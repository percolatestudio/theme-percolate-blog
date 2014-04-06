<?php
  //there is really no difference between post_grid_large and regular aside from the image
  //we can't pass variables so I have to repeat myself
  $summary = get_post_meta($post->ID, "subtitle_value", $single = true);
  $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
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
    <div class="attribution">By
      <?php
        $coauthors = get_coauthors($post->ID);

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