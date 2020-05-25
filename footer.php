<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peak
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-1000">
			<div class="site-info">
				<div class="col">
					<div class="schedule-service">
						<ul>
							<li><a href="#" class="button">schedule service</a></li>
							<li><a href="#">Financing Available</a></li>
						</ul>
					</div>
					<div class="footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
					<div class="social-media">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
							<li><a href="#">Call: 847-510-8302</a></li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer-logos">
						<ul>
							<li><a href="#"><img class="authorized-dealer-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/factory_authorized_dealer@2x@2x.png" alt=""></a></li>
							<li><a href="#"><img class="footer-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/peak-logo@2x.png" alt=""></a></li>
						</ul>
					</div>
				</div>	
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
