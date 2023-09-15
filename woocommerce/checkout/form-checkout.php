<?php

/**
 * Checkout Form
 * changes by AH
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */
?>


<?php
if (!defined('ABSPATH')) {
	exit;
}

// do_action( 'woocommerce_before_checkout_form', $checkout );
// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
	echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
	return;
}
do_action('custom_run_woocommerce_checkout_coupon_form', $checkout);

?>

<form name="checkout" method="post" id="custom_checkout_x" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
	<div class="cus_c_form">
		<div class="custom_c_sections large_cp">
			<?php if ($checkout->get_checkout_fields()) : ?>

				<?php do_action('woocommerce_checkout_before_customer_details'); ?>

				<div class="col2-set" id="customer_details">
					<div class="col-1">
						<?php do_action('woocommerce_checkout_billing'); ?>
					</div>

					<div class="col-2">
						<?php do_action('woocommerce_checkout_shipping'); ?>
					</div>
				</div>

				<?php do_action('woocommerce_checkout_after_customer_details'); ?>

			<?php endif; ?>
			<div class="payment_select_slide">
				<h4 class="titless">Zahlungsmethode auswählen
				</h4>
				<?php
				do_action('custom_woocommerce_checkout_payment');

				?>
				<div id="magnet_div_coupon"></div>

			</div>
			<!-- custom slide  -->
			<div class="details_overview">
				<h4 class="titless">Wie möchtest du zahlen?
				</h4>
				<div class="x_gap"></div>
				<div class="s_box">
					<div class="xbox_header">
						<h5 class="xbox_title">Zahlungsmethode</h5>
						<a href="#" id="edit_payment" class="ex_edit edit_payment">Zahlung bearbeiten</a>
					</div>
					<div class="x_body">
						<div class="x_row">
							<span class="x_xhead">Zahlungsmethode</span>
							<span class="payment_methd value_x" style="
    display: flex;
    align-content: center;
    align-items: center;
">Paypal</span>
						</div>
					</div>
				</div>
				<div class="s_box">
					<div class="xbox_header">
						<h5 class="xbox_title">Coupon's</h5>
						<a href="#" id="edit_payment" class="ex_edit edit_payment">Coupon bearbeiten</a>
					</div>
					<div class="x_body">
						<div class="x_row">
							<span class="x_xhead">Coupon Code</span>
							<span class="coupon_Code value_x">Xhd90</span>
						</div>
					</div>
				</div>
				<div class="s_box">
					<div class="xbox_header">
						<h5 class="xbox_title">Rechnungsadresse</h5>
						<a href="#" class="ex_edit" id="edit_address">Adresse bearbeiten</a>
					</div>
					<div class="x_body">
						<div class="x_row">
							<span class="x_xhead">Name</span>
							<span class="username_x value_x">Mustermann</span>
						</div>
						<div class="x_row">
							<span class="x_xhead">Address</span>
							<span class="address_x value_x"> Deutschland , Musterstadt , Musterstraße # 14</span>
						</div>
					</div>
				</div>

			</div>
			<div class="slide_btn_cont hide_on_mobile">
				<div class="ppc-button-wrapper">
					<div id="ppc-button-ppcp-gateway"></div>
				</div>
				<span class="next_step billing_form step_btn" id="step_btn_x">Weiter ></span>
			</div>


		</div>

		<!-- order details section  -->
		<div class="custom_c_sections order_details_sc">
			<div class="headre_x">
				<h4 class="slide_title">Deine Bestellung</h4>
				<?php $cart_url = wc_get_cart_url(); ?>
				<a href="<?php echo esc_url($cart_url); ?>" class="edit_det">Bestellung bearbeiten</a>
			</div>
			<?php do_action('woocommerce_checkout_before_order_review_heading'); ?>

			<?php do_action('woocommerce_checkout_before_order_review'); ?>

			<div id="order_review" class="custom-order-dt woocommerce-checkout-review-order">

				<?php do_action('woocommerce_checkout_order_review'); ?>
				<div class="wmc-shortcode">
					<?php echo do_shortcode('[elementor-template id="34712"]'); ?>
				</div>
			</div>

			<?php if (wc_terms_and_conditions_checkbox_enabled()) : ?>
				<div class="termx_conty">
					<p class="form-row validate-required">
						<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
							<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" <?php checked(apply_filters('woocommerce_terms_is_checked_default', isset($_POST['terms'])), true); // WPCS: input var ok, csrf ok. 
																																																																	?> id="terms" />
							<span class="woocommerce-terms-and-conditions-checkbox-text"><?php wc_terms_and_conditions_checkbox_text(); ?></span>&nbsp;<abbr class="required" title="<?php esc_attr_e('required', 'woocommerce'); ?>">*</abbr>
						</label>
						<input type="hidden" name="terms-field" value="1" />
					</p>
				</div>
			<?php endif; ?>


			<?php do_action('woocommerce_checkout_after_order_review'); ?>
		</div>
	</div>
	<div class="slide_btn_cont hide_onpc">
		<span class="next_step billing_form step_btn" id="step_btn_x_m">Weiter ></span>
	</div>

</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>