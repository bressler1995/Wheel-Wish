<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
} else {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>

</div>

<script src="//code.tidio.co/rxr3qwq2u7l2al4uxkdsxv081nec2tfx.js" async></script>
</body>
</html>
