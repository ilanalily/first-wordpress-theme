<footer>
  <div class="container">
    <?php 
       $custom_logo_id = get_theme_mod( 'custom_logo' );
       $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
    <img src="<?php echo $image[0]; ?>" alt="">

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'secondary'
    )); ?>

    <p>&copy;<?php bloginfo('site_title')?> 2016. Made by <a href="www.ilanalily.ca">Ilana Lily</a>. Theme from wellmadepixel</p>
    <div class="back_to_top">
      <a href="#top">back to top</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>