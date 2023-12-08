<?php

/**
 * Checkout billing information form
 * changes by AH
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined('ABSPATH') || exit;
?>
<div class="slide_billing">
	<h4 class="slide_title">
		Wohin sollen wir dein Paket schicken?
	</h4>
	<div class="c_cusuts woocommerce-billing-fields">
		<?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

			<h3><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h3>

		<?php else : ?>

		<?php endif; ?>

		<?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

		<div class="woocommerce-billing-fields__field-wrapper">
			<?php
			$fields = $checkout->get_checkout_fields('billing');

			foreach ($fields as $key => $field) {
				woocommerce_form_field($key, $field, $checkout->get_value($key));
			}
			?>
		</div>
		<div class="woocommerce-additional-fields__field-wrapper">
			<?php foreach ($checkout->get_checkout_fields('order') as $key => $field) : ?>
				<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
			<?php endforeach; ?>
		</div>



		<?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
	</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var weiterButton = document.getElementById('step_btn_x');

		weiterButton.addEventListener('click', function(e) {
			var alleFelderAusgefuellt = true;
			var felder = document.querySelectorAll('.woocommerce-billing-fields__field-wrapper .input-text, .woocommerce-additional-fields__field-wrapper .input-text');

			felder.forEach(function(feld) {
				if (!feld.value) {
					alleFelderAusgefuellt = false;
					feld.style.borderColor = 'red'; // Optional: Markieren Sie das Feld rot
				} else {
					feld.style.borderColor = ''; // Entfernen Sie die Markierung, wenn das Feld ausgefüllt ist
				}
			});

			if (!alleFelderAusgefuellt) {
				e.preventDefault(); // Verhindern Sie das Weiterklicken
				alert('Bitte füllen Sie alle erforderlichen Felder aus.');
			}
		});
	});
</script>