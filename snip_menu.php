<nav>
  <div class="wrapper list-vertical">
    <a href="<?php echo site_url(); ?>">Home</a>
    <?php
      $listcats = wp_list_categories('title_li=&style=none&echo=0&orderby=name');
    	$listcats = str_replace("<br />","",$listcats);
    	echo $listcats;
  	 ?>
  </div>
</nav>