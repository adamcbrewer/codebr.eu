<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->
		
		<footer role="contentinfo">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
		</footer><!-- footer -->
		
		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			wp_footer();
		?>


		<!-- Grab Google mootools lib, fall back to local if offline -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.MooTools || document.write('<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/libs/jquery.min.js?v=1.7.1"><\/script>')</script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/script.js"></script>

		<script type="text/javascript" charset="utf-8">
			/*
			 * Init global object (for creating base_url methods, etc.)
			 */
			var Droop = {
				basePath: "<?php echo $_SERVER['HTTP_HOST']; ?>"
			};

			/*
			 * Add a data-attribute of the user-agent to <html>
			 *
			 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
			 */
			var b = document.documentElement;
			b.setAttribute("data-useragent",  navigator.userAgent);
			b.setAttribute("data-platform", navigator.platform );
		</script>


		<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
		mathiasbynens.be/notes/async-analytics-snippet -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

	</body>
</html>