<?php
  /* Boilerplate junk. DO NOT REMOVE */
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
  }
  /* End boilerplate junk */
?>

<?php if (have_comments()) : ?>
  <?php get_template_part('partials/comment-number'); ?> 
  <?php get_template_part('partials/comment-navigation'); ?>
  <?php get_template_part('partials/comment-list'); ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <?php get_template_part('partials/comment-navigation'); ?>
  <?php endif; ?>

<?php else : /* No comments yet */ ?>
  <?php if (comments_open()) : ?>
    <?php /* Comments open, but no comments to display */ ?>
  <?php else : ?>
    <?php get_template_part('partials/comments-closed'); ?>   
  <?php endif; ?>
<?php endif; ?>

<?php if (comments_open()) : ?>
  <?php get_template_part('partials/comment-form'); ?>
<?php endif; ?>
