  
    </div> <!-- end #content -->
  </div> <!-- end #content-wrapper -->
  <div id="footer-wrapper">
    <div id="footer" class="content-bubble">
      <div id="footer-widgets-box">
        <?php if (function_exists('dynamic_sidebar')) : ?>
          <?php dynamic_sidebar('footer-widgets'); ?>
        <?php endif; ?>
        <br style="clear: both;">
      </div>
    </div>
    <br>
    Economy of Effort &copy; 2011 Brendon Rapp<br>
  </div> <!-- end #footer-wrapper -->
<br style="clear: both;">
</div> <!-- end #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
