<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>
<div id="eccent_nav_fixed" class="eccent_nav_fixed">
	   <div class="eccent_nav_fixed_logo_container">
			<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					echo '<a href="' . get_home_url() . '" class="custom-logo-link"><img src="' . get_stylesheet_directory_uri() . '/img/logo.png"></a>';
				}
			?>
		</div>
		<?php if ( has_nav_menu( 'menu-1' ) ) { ?>
			<nav class="site-navigation" role="navigation">
				<?php wp_nav_menu( array( 
						'theme_location' => 'menu-1',
						'menu_id' => 'eccent_menu_ul'
					  )); 
				?>
			</nav>
		<?php 
		} else {
			echo '';
		} 
		?>
	<h3 class="eccemt_nav_follow">Follow Us</h3>
	<div class="eccent_nav_social">
		<?php if(get_theme_mod('eccent_social_facebook', 'https://www.facebook.com/WheelWish') != "") { ?>
			<a class="eccent_social_facebook" href="<?php echo get_theme_mod('eccent_social_facebook', 'https://www.facebook.com/WheelWish');?>" target="_blank"><img class="eccent_social_icon" src="<?php echo get_stylesheet_directory_uri() . '/svg/facebook.svg' ?>"></a>
		<?php } ?>
		<?php if(get_theme_mod('eccent_social_instagram', 'https://www.instagram.com/wheelwish/?hl=en') != "") { ?>
			<a class="eccent_social_instagram" href="<?php echo get_theme_mod('eccent_social_instagram', 'https://www.instagram.com/wheelwish/?hl=en');?>" target="_blank"><img class="eccent_social_icon" src="<?php echo get_stylesheet_directory_uri() . '/svg/instagram.svg' ?>"></a>
		<?php } ?>
		<?php if(get_theme_mod('eccent_social_twitter', 'https://twitter.com/WheelWish') != "") { ?>
			<a class="eccent_social_twitter" href="<?php echo get_theme_mod('eccent_social_twitter', 'https://twitter.com/WheelWish');?>" target="_blank"><img class="eccent_social_icon" src="<?php echo get_stylesheet_directory_uri() . '/svg/twitter.svg' ?>"></a>
		<?php } ?>
		<?php if(get_theme_mod('eccent_social_youtube', 'https://www.youtube.com/channel/UC0ck1QKqalvnRSf5VqCme2Q') != "") { ?>
			<a class="eccent_social_youtube" href="<?php echo get_theme_mod('eccent_social_youtube', 'https://www.youtube.com/channel/UC0ck1QKqalvnRSf5VqCme2Q');?>" target="_blank"><img class="eccent_social_icon" src="<?php echo get_stylesheet_directory_uri() . '/svg/youtube.svg' ?>"></a>
		<?php } ?>
		<?php if(get_theme_mod('eccent_social_linkedin', 'https://www.linkedin.com/company/wheel-wish/') != "") { ?>
			<a class="eccent_social_linkedin" href="<?php echo get_theme_mod('eccent_social_linkedin', 'https://www.linkedin.com/company/wheel-wish/');?>" target="_blank"><img class="eccent_social_icon" src="<?php echo get_stylesheet_directory_uri() . '/svg/linkedin.svg' ?>"></a>
		<?php } ?>
	</div>
</div>
<header class="eccent_header" role="banner">
	<div class="eccent_topbar">
		<div class="eccent_container">
			<a class="eccent_top_telephone" href="<?php echo 'tel:' . get_theme_mod('eccent_contact_phone', '1-855-406-0424');?>"><?php echo 'Call ' . get_theme_mod('eccent_contact_phone', '1-855-406-0424');?></a>
		</div>
	</div>
	<div class="eccent_navigation_area">
		<div class="eccent_container eccent_top_pad">
			<div class="eccent_column_half eccent_logo_holder">
				<button type="button" class="eccent_menu_opt" id="eccent_menu_opt"><img class="eccent_menu_opt_icon" src="<?php echo get_stylesheet_directory_uri() . '/img/menu.png' ?>"></button>
				<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<a href="' . get_home_url() . '" class="custom-logo-link"><img src="' . get_stylesheet_directory_uri() . '/img/logo.png"></a>';
					}
				?>
			</div>
			<div class="eccent_column_half">
				<ul class="eccent_nav_actions">
					<?php 
						if(is_user_logged_in()) {
							echo '<li><a href="' . get_site_url() . '/account"><img src="' . get_stylesheet_directory_uri() . '/svg/profile.svg"><span>Account</span></a></li>';
							echo '<li><a href="' . wp_logout_url() . '"><img src="' . get_stylesheet_directory_uri() . '/svg/logout.svg"><span>Logout</span></a></li>';
						} else {
							echo '<li><a href="' . get_site_url() . '/login"><img src="' . get_stylesheet_directory_uri() . '/svg/login.svg"><span>Login</span></a></li>';
							echo '<li><a href="' . get_site_url() . '/register"><img src="' . get_stylesheet_directory_uri() . '/svg/signup.svg"><span>Register</span></a></li>';
						}
					?>

					<li class="eccent_nav_actions_dark"><a href="<?php echo get_site_url() . '/shop-now' ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/svg/application.svg' ?>"><span>Shop Now</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
