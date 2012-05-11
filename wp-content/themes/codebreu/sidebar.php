<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<<<<<<< HEAD
<<<<<<< HEAD
			<!-- <ul class="xoxo"> -->
=======
			<ul class="xoxo">
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
=======
			<ul class="xoxo">
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li>
				<?php get_search_form(); ?>
			</li>

			<li>
				<h3><?php _e( 'Archives', 'boilerplate' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Meta', 'boilerplate' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
<<<<<<< HEAD
<<<<<<< HEAD
		</ul>
=======
			</ul>
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54
=======
			</ul>
>>>>>>> 89d93479215046255d0738824a1ef51cc0947a54

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>