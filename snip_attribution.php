<div class="attribution">
  <?php if ( function_exists( 'coauthors_posts_links' ) ) { ?>

    <?php foreach( get_coauthors() as $coauthor ) : ?>
      <div class="author">
        <?php $author_posts_url = get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ); ?>
        <a class="avatar-wrapper" href="<?php echo $author_posts_url; ?>"><?php echo get_avatar( $coauthor->user_email, '72' ); ?></a>
        <div class="meta">
          <a class="name" rel="author" href="<?php echo $author_posts_url; ?>"><?php echo $coauthor->display_name; ?></a>
          <div class="description"><?php echo $coauthor->description; ?></div>
          <?php if(get_the_author_meta('twitter', $coauthor->ID) != '') { ?>
          <a class="twitter" href="http://twitter.com/<?php the_author_meta('twitter', $coauthor->ID) ?>">@<?php the_author_meta('twitter', $coauthor->ID) ?></a>
        <?php } ?>
        </div>
      </div>
    <?php endforeach; ?>

  <?php } else { ?>

    <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )) ?>"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '72'); ?></a>
    By <?php the_author_posts_link();?>

  <?php }?>
</div>