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
						<li><a href="/schedule-service" class="service-button">schedule service</a></li>
						<li><a href="/financing" class="financing-button">Financing Available</a></li>
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
						<li><a href="https://twitter.com/peakhvacnow/status/1262923357193994240?s=19" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></li>
						<li><a href="https://www.instagram.com/p/B7BVDQlFcQt/?igshid=17e4t4pkeif6t" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
						<li><a href="tel:+8475108302" target="_blank">Call: 847-510-8302</a></li>
					</ul>
				</div>
			</div>
			<div class="col">
				<div class="footer-logos">
					<ul>
						<li><img class="authorized-dealer-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/factory_authorized_dealer@2x@2x.png" alt="Authorize Image Dealer"></li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>"><img class="footer-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/peak-logo@2x.png" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div><!-- .site-info -->
		<div id="site-footer-print">
				<hr>
				<p>&copy;<?php echo date("Y"); ?> Peak Heating Cooling Refrigeration Inc. | All rights reserved. | <a href="/privacy-policy">Privacy policy.</a></p>
			</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>