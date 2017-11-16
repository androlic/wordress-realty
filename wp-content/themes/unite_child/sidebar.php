<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">			
			
			<aside id="realty-bar" class="widget widget_recent_entries">
				<ul><?php get_realty_sidebar() ?></ul>
			</aside>

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
							

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'unite' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'unite' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area	?>
		
		
		
 
	</div><!-- #secondary -->