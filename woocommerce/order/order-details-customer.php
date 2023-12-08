<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.6.0
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
$billing_address = $order->get_address('billing');

// Format the address
$formatted_address = implode(' , ', array(
    $billing_address['country'],
    $billing_address['city'],
    $billing_address['postcode'],
    $billing_address['address_1'],
    $billing_address['address_2']
));
$shipping_address = $order->get_address('shipping');

// Format the address
$formatted_shipping_address = implode(', ', array(
    $shipping_address['country'],
    $shipping_address['city'],
    $shipping_address['postcode'],
    $shipping_address['address_1'],
    $shipping_address['address_2']
));
?>
 <div class="inner_detai_warp">
    <div class="he_warp"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></div>
    <div class="warp_bdy">
        <div class="row_wb">
            <div class="col_wb title_wb"><?php esc_html_e( 'Address:', 'woocommerce' ); ?></div>
            <div class="col_wb"><?php echo $formatted_address ;?></div>
        </div>
        <?php if ( $order->get_billing_phone() ) : ?>
            <div class="row_wb">
                <div class="col_wb title_wb"><?php esc_html_e( 'Phone:', 'woocommerce' ); ?></div>
                <div class="col_wb"><?php echo esc_html( $order->get_billing_phone() ); ?></div>
            </div>
		<?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
            <div class="row_wb">
                <div class="col_wb title_wb"><?php esc_html_e( 'Email:', 'woocommerce' ); ?></div>
                <div class="col_wb"><?php echo esc_html( $order->get_billing_email() ); ?></div>
            </div>
		<?php endif; ?>
    </div>
</div>
<?php if ( $show_shipping ) : ?>
<div class="inner_detai_warp">
    <div class="he_warp"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></div>
    <div class="warp_bdy">
        <div class="row_wb">
            <div class="col_wb title_wb"><?php esc_html_e( 'Address:', 'woocommerce' ); ?></div>
            <div class="col_wb"><?php echo $formatted_shipping_address; ?></div>
        </div>
        <?php if ( $order->get_shipping_phone() ) : ?>
            <div class="row_wb">
                <div class="col_wb title_wb"><?php esc_html_e( 'Phone:', 'woocommerce' ); ?></div>
                <div class="col_wb"><?php echo esc_html( $order->get_shipping_phone() ); ?></div>
            </div>
		<?php endif; ?>
    </div>
</div>
<?php endif; ?>

