<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php get_template_part('config/css-js'); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="header-wrapper">
        <div id="header">
          <div id="title-bar">
            <?php get_search_form(); ?>
          </div>
          <div id="header-widgets-box">
            <?php if (function_exists('dynamic_sidebar')) : ?>
              <?php dynamic_sidebar('header-widgets'); ?>
            <?php endif; ?>
          </div>
        </div> <!-- end #header -->
      </div> <!-- end #header-wrapper -->
      <div id="content-wrapper">
        <div id="site-title" class="content-bubble">
          <h1 id="title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
          <div id="menu-bar">
            <?php /* wp_list_pages(array('title_li' => null)); */ ?>
            <li class="page_item"><a href="http://tumblr.economyofeffort.com/">Tumblr</a></li>
            <li class="page_item"><a href="http://www.twitter.com/legion">Twitter</a></li>
            <li class="page_item"><a href="http://www.github.com/LegionSB">Github</a></li>
            <li class="page_item"><a href="http://www.linkedin.com/in/legion">LinkedIn</a></li>
          </div>
        </div>
        <div id="content" class="content-bubble">
