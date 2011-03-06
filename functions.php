<?php

  /* Stylesheets */
  function load_stylesheets() {
    $path = get_template_directory_uri() . "/css";
    foreach ($GLOBALS['css'] as $sheet) {
      echo "<link rel='stylesheet' href='$path/$sheet' type='text/css'>";
    }
  }

  /* JavaScript files */
  function load_javascript() {
    $path = get_template_directory_uri() . "/js";
    echo "<script type='text/javascript' src='$path/head.min.js'></script>";   
    echo "<script type='text/javascript'>";
    echo 'head.js(';
    $first = true;
    foreach ($GLOBALS['javascript'] as $js) {
      /* Comma if not the first script */
      if (!($first)) { echo ","; }
      if (strcasecmp(substr($js, 0, 4), "http") == 0) {
        /* Remote URL */
        echo '"' . $js . '"';
      } else {
        /* Local URL */
        echo '"' . $path . '/' . $js . '"';
      }
      $first = false;
    }
    echo ');</script>';
  }

  /* Add actions to wp_head */
  add_action('wp_head', 'load_stylesheets');
  add_action('wp_head', 'load_javascript');

  /* Register our three sidebars */
  if (function_exists('register_sidebar')) {
    register_sidebar(array(
    		'name' => 'Header Widgets',
    		'id'   => 'header-widgets',
    		'description'   => 'These are widgets for the header.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    ));
    register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    ));
    register_sidebar(array(
    		'name' => 'Footer Widgets',
    		'id'   => 'footer-widgets',
    		'description'   => 'These are widgets for the footer.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    ));
  }


?>
