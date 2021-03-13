<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<footer id="eccent_footer" class="eccent_footer" role="contentinfo">
	<div class="eccemt_footer_overlay"></div>
	<div class="eccent_container eccent_footer_container">
		<div class="eccent_footer_column">
			<h3 class="eccent_footer_title">About Us</h3>
			<div class="eccent_footer_divider"></div>
			<p class="eccent_footer_paragraph"><?php echo get_theme_mod('eccent_contact_about', 'Wheel Wish brings the automotive purchase experience into the modern digital age. Choose the vehicle you want with all the options you like, set the price you want to pay, and have your vehicle delivered or choose local pickup. Our 100% satisfaction rating means a no stress buying experience.');?></p>
			<div class="eccent_footer_social">
				<?php if(get_theme_mod('eccent_social_facebook', 'https://www.facebook.com/WheelWish') != "") { ?>
					<a href="<?php echo get_theme_mod('eccent_social_facebook', 'https://www.facebook.com/WheelWish');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/facebook.svg' ?>"></a>
				<?php } ?>
				<?php if(get_theme_mod('eccent_social_instagram', 'https://www.instagram.com/wheelwish/?hl=en') != "") { ?>
					<a href="<?php echo get_theme_mod('eccent_social_instagram', 'https://www.instagram.com/wheelwish/?hl=en');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/instagram.svg' ?>"></a>
				<?php } ?>
				<?php if(get_theme_mod('eccent_social_twitter', 'https://twitter.com/WheelWish') != "") { ?>
					<a href="<?php echo get_theme_mod('eccent_social_twitter', 'https://twitter.com/WheelWish');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/twitter.svg' ?>"></a>
				<?php } ?>
				<?php if(get_theme_mod('eccent_social_youtube', 'https://www.youtube.com/channel/UC0ck1QKqalvnRSf5VqCme2Q') != "") { ?>
					<a href="<?php echo get_theme_mod('eccent_social_youtube', 'https://www.youtube.com/channel/UC0ck1QKqalvnRSf5VqCme2Q');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/youtube.svg' ?>"></a>
				<?php } ?>
				<?php if(get_theme_mod('eccent_social_linkedin', 'https://www.linkedin.com/company/wheel-wish/') != "") { ?>
					<a href="<?php echo get_theme_mod('eccent_social_linkedin', 'https://www.linkedin.com/company/wheel-wish/');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/linkedin.svg' ?>"></a>
				<?php } ?>
			</div>
		</div>
		<div class="eccent_footer_column">
			<h3 class="eccent_footer_title">Information</h3>
			<div class="eccent_footer_divider"></div>
			<?php if ( has_nav_menu( 'footer-1' ) ) {
				wp_nav_menu( array( 
					'theme_location' => 'footer-1',
					'menu_id' => 'eccent_footer_ul_1',
					'menu_class' => 'eccent_footer_ul'
				));
			} else {
				echo '';
			} 
			?>
		</div>
		<div class="eccent_footer_column">
			<h3 class="eccent_footer_title">Contact Us</h3>
			<div class="eccent_footer_divider"></div>
			<ul id="eccent_footer_ul_2" class="eccent_footer_ul">
				<li id="menu-item-709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-709"><a href="<?php echo 'tel:' . get_theme_mod('eccent_contact_phone', '1-855-406-0424');?>"><img class="eccent_footer_contact_icon" src="https://brianr35.sg-host.com/wp-content/uploads/2020/11/telephone.svg"><?php echo get_theme_mod('eccent_contact_phone', '1-855-406-0424');?></a></li>
				<li id="menu-item-710" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-710"><a href="<?php echo 'mailto:' . get_theme_mod('eccent_contact_email', 'info@wheelwish.com');?>"><img class="eccent_footer_contact_icon" src="https://brianr35.sg-host.com/wp-content/uploads/2020/11/email.svg"><?php echo get_theme_mod('eccent_contact_email', 'info@wheelwish.com');?></a></li>
				<li id="menu-item-711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-711"><a href="<?php echo get_theme_mod('eccent_contact_address_url', 'https://goo.gl/maps/2Xzinms41EnaszLp9');?>" class="customize-unpreviewable" target="_blank"><img class="eccent_footer_contact_icon" src="https://brianr35.sg-host.com/wp-content/uploads/2020/11/pin.svg"><span class="eccent_footer_contact_span"><?php echo get_theme_mod('eccent_contact_address', '846 Broken Sound Parkway NW, Boca Raton, Florida, 33487 USA');?></span></a></li>
			</ul>
		</div>
		<div class="eccent_footer_column">
			<h3 class="eccent_footer_title">Working Hours</h3>
			<div class="eccent_footer_divider"></div>
			<p class="eccent_footer_paragraph"><?php echo get_theme_mod('eccent_contact_hours', 'Monday to Sunday<br>9:00 AM – 9:00 PM');?></p>
		</div>
		
	</div>
</footer>
<a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjkzOCIsInRvZ2dsZSI6ZmFsc2V9" class="eccent_calculator_opt"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/calculator/calculator.svg'; ?>"></a>