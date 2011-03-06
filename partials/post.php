<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <?php /* Post title and datestamp */ ?>
  <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="post-metadata post-metadata-top">
    <span class="datestamp"><?php the_time('F jS, Y'); ?></span><br>
    <?php /* the_tags('Tags: ', ', ', '<br>');  */ ?>
  </div>

  <?php /* Post content */ ?>
  <div class="post-content">
    <?php the_content(); ?>
  </div>

  <div class="post-metadata post-metadata-bottom">
    <?php /* Posted in: <?php the_category(', ') ?><br> */ ?>
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
  </div>
</div>
