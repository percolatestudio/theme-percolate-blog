<div class="metadata">
  <div class="definition"><span>Published:</span> <?php the_time('M j, Y'); ?></div>
	<div class="definition"><span>Categories:</span> <?php the_category(', '); ?></div>
	<div class="definition"><?php the_tags('<span>Tags:</span> ', ', ', ''); ?> </div>

	<!-- <a href="<?php the_permalink(); ?>#comments"><span class="icon-comment"></span> <?php comments_number('0', '1', '%'); ?></a> -->

  <a class="link-social" href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>" title="Tweet this article" target="_blank"><span class="icon-twitter"></span></a>

  <!-- More info on FB share -->
  <a class="link-social" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="return fbs_click()" target="_blank"><span class="icon-facebook"></span></a>

</div>