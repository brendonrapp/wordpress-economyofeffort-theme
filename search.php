<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php get_template_part('partials/search-title'); ?>
  <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('partials/post'); ?>
  <?php endwhile; ?>

  <?php /* Page navigation */ ?>
  <?php get_template_part('partials/page-navigation'); ?>

<?php else : /* Page not found */ ?>
  <?php get_template_part('partials/not-found'); ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
