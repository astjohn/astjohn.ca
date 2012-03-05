<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Astjohn.ca
 * @since Astjohn.ca 1.0
 */


if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">

      <div id="me">
        <img src="<?php bloginfo('template_directory'); ?>/images/layout/default/headshot.jpeg" alt="That's me!", title="That's me!">
      </div>
      <p id="hello">Hello!<br/>I'm Adam and I hope this blog highlight's some of the things that I enjoy.</p>

			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
