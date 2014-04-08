<nav>
  <div class="wrapper">
    <div class="menu-header">
      <a class="menu-toggle"><span class="icon-percolate-full"></span></a>
      <div class="menu-subtitle">A journal about product design & engineering by <a href="http://percolatestudio.com" class="inverse">Percolate Studio</a></div>
    </div>
    <div class="list-vertical">
      <a href="<?php echo site_url(); ?>">Home</a>
      <?php
        $listcats = wp_list_categories('title_li=&style=none&echo=0&orderby=name');
      	$listcats = str_replace("<br />","",$listcats);
      	echo $listcats;
    	 ?>
    </div>
  </div>
</nav>