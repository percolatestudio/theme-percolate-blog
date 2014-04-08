    <?php if( !is_single() ) {?><footer>&copy; 2012&mdash;<?php echo date('Y'); ?> Percolate Studio</footer><?php }?>
  </div><!-- end .content wrapper -->

  <!-- <?php echo get_num_queries() . " queries, "; timer_stop(1); echo " seconds"; ?> -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


</body>
<?php wp_footer(); ?>
</html>