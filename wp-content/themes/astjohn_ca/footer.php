<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Astjohn.ca
 * @since Astjohn.ca 1.0
 */
?>

	</div><!-- #main -->


</div><!-- #page -->


<?php wp_footer(); ?>
<footer class="clearfix layout">
  <div class="social_media">
    <ul class="floating">
      <li>
        <a href="http://www.twitter.com/astjohn" target="blank" title="@astjohn">
          <image id="footer_twitter" src="<?php bloginfo('template_directory'); ?>/images/layout/default/twitter.png" alt="Twitter">
        </a>
      </li>
      <li>
        <a href="http://www.linkedin.com/in/astjohn" target="blank" title="LinkedIn">
          <image id="footer_linkedin" src="<?php bloginfo('template_directory'); ?>/images/layout/default/linkedin.png" alt="LinkedIn">
        </a>
      </li>
      <li>
        <a href="http://www.github.com/astjohn" target="blank" title="github">
          <image id="footer_github" src="<?php bloginfo('template_directory'); ?>/images/layout/default/github.png" alt="Github">
        </a>
      </li>
    </ul>
  </div>
  <p class="copyright">
    © <?php echo date('Y', time()); ?> Adam St. John
  </p>
</footer>

</body>
</html>
