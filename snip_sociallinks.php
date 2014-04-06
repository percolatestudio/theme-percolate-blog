<div class="social">
  <a href="<?php the_permalink(); ?>#comments"><span class="icon-comment"></span> <?php comments_number('0', '1', '%'); ?></a>

  <a href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>" title="Tweet this article" target="_blank"><span class="icon-twitter"></span></a>

  <a href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank"><span class="icon-facebook"></span></a>

  <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'
  sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
</div>