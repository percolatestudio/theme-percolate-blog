<div class="recentposts bar">
  <h2 class="occasion"><span>Recent Posts</span></h2>
  <ul>
    <?php
      $postslist = get_posts('numberposts=8&order=DESC&orderby=date');
      foreach ($postslist as $post) :
        setup_postdata($post);
    ?>
    <?php $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );
          if ($attachments) { ?>
      <li class="entry">
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="tooltip">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail', array('title' => ""));
            }else{
              post_image('medium');
            }?>
        </a>
      </li>
    <?php } ?>
    <?php endforeach; ?>
  </ul>
</div>