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

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>
<!-- SyntaxHighlighter -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/syntaxHighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/syntaxHighlighter/scripts/shAutoloader.js"></script>

<script type="text/javascript">
    function path()
    {
      var args = arguments,
          result = []
          ;

      for(var i = 0; i < args.length; i++)
          result.push(args[i].replace('@', "<?php bloginfo('template_directory'); ?>/js/syntaxHighlighter/scripts/"));

      return result
    };
    SyntaxHighlighter.autoloader.apply(null, path(
      'applescript            @shBrushAppleScript.js',
      'actionscript3 as3      @shBrushAS3.js',
      'bash shell             @shBrushBash.js',
      'coldfusion cf          @shBrushColdFusion.js',
      'cpp c                  @shBrushCpp.js',
      'c# c-sharp csharp      @shBrushCSharp.js',
      'css                    @shBrushCss.js',
      'delphi pascal          @shBrushDelphi.js',
      'diff patch pas         @shBrushDiff.js',
      'erl erlang             @shBrushErlang.js',
      'groovy                 @shBrushGroovy.js',
      'java                   @shBrushJava.js',
      'jfx javafx             @shBrushJavaFX.js',
      'js jscript javascript  @shBrushJScript.js',
      'perl pl                @shBrushPerl.js',
      'php                    @shBrushPhp.js',
      'text plain             @shBrushPlain.js',
      'py python              @shBrushPython.js',
      'ruby rails ror rb      @shBrushRuby.js',
      'sass scss              @shBrushSass.js',
      'scala                  @shBrushScala.js',
      'sql                    @shBrushSql.js',
      'vb vbnet               @shBrushVb.js',
      'xml xhtml xslt html    @shBrushXml.js'
    ));
    SyntaxHighlighter.all()
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4489886-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
