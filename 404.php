<?php get_header(); ?>


  <header class="default">
    <h1 class="page-title">Page not found</h1>
    <h2 class="page-subtitle">Checkout our latest posts instead</h2>
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