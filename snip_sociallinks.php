<div class="social_links">
  <?php comments_popup_link('Comment', 'Comment (1)', 'Comment (%)', 'btn'); ?>
  <a class="class" href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>" title="Tweet this article" target="_blank">Twitter</a>

  <a class="btn" href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank">Facebook</a>

  <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
</div>