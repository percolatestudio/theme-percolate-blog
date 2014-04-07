<div class="recentposts bar">
  <h3 class="occasion"><span>Recent Posts</span></h3>
  <ul>
    <?php
      $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
      foreach ($postslist as $post) :
        setup_postdata($post);
    ?>

    <li class="entry">
      <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="tooltip">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumbnail', array('title' => ""));
          }else{
            post_image('medium');
          }?>
      </a>
    </li>

    <?php endforeach; ?>
  </ul>
</div>