<?php if (is_category()) {
  echo '<h2>Archive for ' . single_cat_title() . ' category</h2>';
  } else if (is_tag()) {
    echo '<h2>Posts tagged ' . single_tag_title() . '</h2>';
  } else if (is_day()) {
    echo '<h2>Archive for ' . the_time('F jS, Y') . '</h2>';
  } else if (is_month()) {
    echo '<h2>Archive for ' . the_time('F, Y') . '</h2>';
  } else if (is_year()) {
    echo '<h2>Archive for ' . the_year('Y') . '</h2>';
  } else if (is_author()) {
    echo '<h2>Author Archive</h2>';
  } else if (isset($_GET['paged']) && !empty($_GET['paged'])) {
    echo '<h2>Blog Archive</h2>';
  }
?>
