<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

 $footer = get_field('footer');
 $footer2 = get_field('footer_2');

?>

	<footer id="colophon" class="site-footer">
		<section class="footer container">
			<div class="travelGoo">
				<h3>Travel <span> Goo </span> </h3>
				<p id="responsiveParagraph">Book your trip in minute, get full <br/> Control for much longer.</p>
			</div>
				<nav id="footer-navigation" class="footer_navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'Footer',
									'menu_class' 	 => 'footer-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->
				<div class="socialMedia">
					<div class="socialIcons">
						<?php
							 for($i = 1; $i <= sizeof($footer); $i++) {
								$card = 'card_' . $i;
								echo '
									<img src="'. $footer[$card]['image'] .'" alt="">
								';
							}
						?>
					</div>
					<div class="appStore">
						<h3>Discover our app</h3>
						<div class="appIcon">
						<?php
							 for($i = 1; $i <= sizeof($footer2); $i++) {
								$card = 'card_' . $i;
								echo '
									<img src="'. $footer2[$card]['image'] .'" alt="">
								';
							}
						?> 
					</div>
				</div>
		</section>
			<div class="allRights">
				<p>All rights reserved@travelgoo.co</p>
			</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>


</body>
</html>









