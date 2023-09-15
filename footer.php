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
	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
		get_template_part( 'template-parts/dynamic-footer' );
	} else {
		get_template_part( 'template-parts/footer' );
	}
}
?>

<script src="https://staging.neurolab-vital.de/wp-content/plugins/elementor-nl-balken/progress-bar.js"></script>

<!-- Userlike Chat Widget Unified Messaging -->
<!-- <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/98643b15dbb6e302be3aa36c266b942a532d7b19a717e0b69203f66f81d74733.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>
