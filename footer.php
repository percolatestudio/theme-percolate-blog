    <?php if( !is_single() ) {?><footer>&copy; 2012&mdash;<?php echo date('Y'); ?> <a href="http://percolatestudio.com">Percolate Studio</a></footer><?php }?>
  </div><!-- end .content wrapper -->

  <!-- <?php echo get_num_queries() . " queries, "; timer_stop(1); echo " seconds"; ?> -->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-32959034-2', 'percolatestudio.com');
    ga('send', 'pageview');

  </script>


</body>
<?php wp_footer(); ?>
</html>