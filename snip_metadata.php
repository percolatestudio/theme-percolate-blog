<div class="metadata">
  <!-- <a href="<?php the_permalink(); ?>#comments"><span class="icon-comment"></span> <?php comments_number('0', '1', '%'); ?></a> -->

  <a class="link-social" href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>" title="Tweet this article" target="_blank"><span class="icon-twitter"></span></a>

  <!-- More info on FB share -->
  <a class="link-social" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="return fbs_click()" target="_blank"><span class="icon-facebook"></span></a>

  <span class="date"><?php the_time('M j, Y'); ?></span>
	<?php the_tags(); ?>
	<?php the_category();?>
</div>