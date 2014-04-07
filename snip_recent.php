<div class="posts-grid recent">
  <?php
    $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
    foreach ($postslist as $post) :
      setup_postdata($post);
  ?>
		<?php include('snip_post_grid.php'); ?>
  <?php endforeach; ?>
</div>