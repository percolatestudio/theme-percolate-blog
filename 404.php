<?php get_header(); ?>
  <header class="collage short">
    <div class="grid-2 square">
      <h1 class="title-page">Not Found</h1>
      <h2 class="description-page">The blog content you were looking for cannot be found. Checkout our latest posts instead.</h2>
    </div>
  </header>


  <div class="collage">
    <?php
      $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
      foreach ($postslist as $post) :
        setup_postdata($post);
    ?>
  		<?php include('snip_post_grid.php'); ?>
    <?php endforeach; ?>
  </div>

<?php get_footer(); ?>