<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devgrocery
 */
?>

	<footer id="colophon" class="site-footer">
	<div class="footer-main">
	<div class="footer-container">
				<h2>Navigation</h2>
				<span><?php wp_nav_menu(['theme_location' => 'footer-menu']); ?></span>

		</div>
		<div class="footer-container">
				<h2>Information</h2>
				

		</div>
		<div class="footer-container">
				<h2>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></h2>

		</div>
	</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
