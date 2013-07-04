			</section><!-- #main -->

			<footer id="footer" role="contentinfo">

				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with four columns of widgets.
					 */
					//get_sidebar( 'footer' );
				?>
				<br />
				<br />
				<p>
					&copy; 
                    <a target="_blank" title="adamcbrewer.com" href="http://adamcbrewer.com">Adam Brewer</a> &amp; 
                    <a target="_blank" title="stuuuuugoooooooooo" href="http://stugoo.co.uk">Stu Grant</a> 
					<?php echo date('Y', time('now')); ?>. 
                    <a title="@codebreu" target="_blank" href="http://twitter.com/codebreu">Twitter</a> 
				</p>

			</footer><!-- footer -->

		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			wp_footer();
		?>

	</div> <!-- #wrapper -->

</body>
</html>