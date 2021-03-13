<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */

include('custom-shortcodes.php');

function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

function load_scripts() {
    wp_register_script('wheelwish_ui', get_stylesheet_directory_uri() . '/js/uicontrol.js', array( 'jquery' ), 1, true);
    wp_enqueue_script('wheelwish_ui');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function eccent_add_footer_menu() {
	register_nav_menu('footer-1',__( 'Footer 1' ));
  }

add_action( 'init', 'eccent_add_footer_menu' );
 
function eccent_redirect_checkout_function() {
   return wc_get_checkout_url();
}

add_filter( 'woocommerce_add_to_cart_redirect', 'eccent_redirect_checkout_function' );


function woo_custom_add_to_cart_before( $cart_item_data ) {
 
    global $woocommerce;
    $woocommerce->cart->empty_cart();
 
    // Do nothing with the data and return
    return true;
}

add_filter( 'woocommerce_add_to_cart_validation', 'woo_custom_add_to_cart_before' );

function mepr_add_tabs_content($action) {
	//Listens for the "premium-support" action on the account page, before rendering the contact form shortcode.
	if($action == 'wheelwish-orders') {
		echo do_shortcode('[wheelwish_orders]');
	}

}

add_action('mepr_account_nav_content', 'mepr_add_tabs_content');

function wheelwish_customize($wp_customize) {
	//Settings

	$wp_customize->add_setting( 'eccent_wheel_1' , array(
		'default'   => 'Free Delivery Anywhere In Ontario',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_2' , array(
		'default'   => 'Low Interest Rates Approval',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_3' , array(
		'default'   => '30 Day Vehicle Exchange Program',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_4' , array(
		'default'   => 'Best In Class Vehicle Certification Policy',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_5' , array(
		'default'   => 'Privacy Information Safeguarding',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_6' , array(
		'default'   => 'Credit Rebuild Program',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_7' , array(
		'default'   => 'Highest Customer Satisfaction Rating',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_8' , array(
		'default'   => 'Prime and Non Prime Auto Financing',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_9' , array(
		'default'   => '24/7 Instant Application Approval',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_wheel_10' , array(
		'default'   => 'Extensive Network of New and Used Vehicle',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_about' , array(
		'default'   => 'Wheel Wish brings the automotive purchase experience into the modern digital age. Choose the vehicle you want with all the options you like, set the price you want to pay, and have your vehicle delivered or choose local pickup. Our 100% satisfaction rating means a no stress buying experience.',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_phone' , array(
		'default'   => '1-855-406-0424',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_email' , array(
		'default'   => 'info@wheelwish.com',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_address' , array(
		'default'   => '846 Broken Sound Parkway NW, Boca Raton, Florida, 33487 USA',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_address_url' , array(
		'default'   => 'https://goo.gl/maps/2Xzinms41EnaszLp9',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_contact_hours' , array(
		'default'   => 'Monday to Sunday<br>9:00 AM – 9:00 PM',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_social_facebook' , array(
		'default'   => 'https://www.facebook.com/WheelWish',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_social_instagram' , array(
		'default'   => 'https://www.instagram.com/wheelwish/?hl=en',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_social_twitter' , array(
		'default'   => 'https://twitter.com/WheelWish',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_social_youtube' , array(
		'default'   => 'https://www.youtube.com/channel/UC0ck1QKqalvnRSf5VqCme2Q',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'eccent_social_linkedin' , array(
		'default'   => 'https://www.linkedin.com/company/wheel-wish/',
		'transport' => 'refresh',
	));

	//Sections

	$wp_customize->add_section( 'eccent_wheel_section' , array(
		'title'      => __( 'Wheel Wish Wheel Widget' ),
		'description' => __( 'Ordered from the very top middle piece and continues clockwise.' ),
		'priority'   => 1,
	));

	$wp_customize->add_section( 'eccent_contact_section' , array(
		'title'      => __( 'Wheel Wish Basic Details' ),
		'description' => __( 'Basic details that appear in the header and footer.' ),
		'priority'   => 2,
	));

	$wp_customize->add_section( 'eccent_social_section' , array(
		'title'      => __( 'Wheel Wish Social Media' ),
		'description' => __( 'Social media icon links that appear in the footer and in the navigation menu.' ),
		'priority'   => 3,
	));

	//Controls

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_1_control', array(
		'label'      => __( '1 (Top Center)' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_1',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_2_control', array(
		'label'      => __( '2' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_2',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_3_control', array(
		'label'      => __( '3' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_3',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_4_control', array(
		'label'      => __( '4' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_4',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_5_control', array(
		'label'      => __( '5' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_5',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_6_control', array(
		'label'      => __( '6 (Bottom Center)' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_6',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_7_control', array(
		'label'      => __( '7' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_7',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_8_control', array(
		'label'      => __( '8' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_8',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_9_control', array(
		'label'      => __( '9' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_9',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_wheel_10_control', array(
		'label'      => __( '10' ),
		'section'    => 'eccent_wheel_section',
		'settings'   => 'eccent_wheel_10',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_about_control', array(
		'label'      => __( 'About' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_about',
		'type'       => 'textarea'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_phone_control', array(
		'label'      => __( 'Phone Number' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_phone',
		'type'       => 'tel'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_email_control', array(
		'label'      => __( 'Email Address' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_email',
		'type'       => 'email'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_address_control', array(
		'label'      => __( 'Location' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_address',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_address_url_control', array(
		'label'      => __( 'Location URL' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_address_url',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_contact_hours_control', array(
		'label'      => __( 'Hours' ),
		'section'    => 'eccent_contact_section',
		'settings'   => 'eccent_contact_hours',
		'type'       => 'textarea'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_social_facebook_control', array(
		'label'      => __( 'Facebook' ),
		'section'    => 'eccent_social_section',
		'settings'   => 'eccent_social_facebook',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_social_instagram_control', array(
		'label'      => __( 'Instagram' ),
		'section'    => 'eccent_social_section',
		'settings'   => 'eccent_social_instagram',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_social_twitter_control', array(
		'label'      => __( 'Twitter' ),
		'section'    => 'eccent_social_section',
		'settings'   => 'eccent_social_twitter',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_social_youtube_control', array(
		'label'      => __( 'Youtube' ),
		'section'    => 'eccent_social_section',
		'settings'   => 'eccent_social_youtube',
		'type'       => 'text'
	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eccent_social_linkedin_control', array(
		'label'      => __( 'LinkedIn' ),
		'section'    => 'eccent_social_section',
		'settings'   => 'eccent_social_linkedin',
		'type'       => 'text'
	)));

}

add_action( 'customize_register', 'wheelwish_customize' );

//temporarily disable woocommerce payments
add_filter( 'woocommerce_cart_needs_payment', '__return_false' );