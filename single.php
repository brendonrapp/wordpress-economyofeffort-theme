<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('partials/post'); ?>
  <?php endwhile; ?>

  <?php /* Page navigation */ ?>
  <?php if ($wp_query->max_num_pages > 1) : ?>
    <?php get_template_part('partials/page-navigation'); ?>
  <?php endif; ?>

  <?php comments_template(); ?>

<?php else : /* Page not found */ ?>
  <?php get_template_part('partials/404'); ?> 
<?php endif; ?>

<?php get_footer(); ?>
