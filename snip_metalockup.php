<li class="metalockup post">
  <div class="image">
    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
		  <?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');}?>
	  </a>
  </div>
  <div class="meta">
		<h3 class="title">
			<strong>
  			<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="inset"><?php the_title() ?></a>
			</strong>
		</h3>
		<small class="date occasion">&nbsp;&ndash;&nbsp;<?php the_time('M jS Y'); ?></small>
		<div class="entry">
		  <?php   ?>
  		<?php 
  		  $summary = get_post_meta($post->ID, "summary_value", $single = true);
  		  if($summary !== ''){
  		    echo $summary;
  		  }else{
  		    the_excerpt('Read more'); 
  		  }
    		
  		?>
		</div>
	</div>
</li>