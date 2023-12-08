<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">
    <div class="upper_custom_componnet">
        <div class="heading_c">Bestellung #<?php echo $order->get_id();?></div>
        <div class="cash_icon"><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="100.000000pt" height="100.000000pt" viewBox="0 0 100.000000 100.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M460 890 c-105 -19 -172 -102 -172 -210 0 -124 88 -212 212 -212 124
0 212 88 212 212 0 138 -117 235 -252 210z m134 -54 c116 -68 115 -248 -2
-314 -54 -30 -130 -30 -184 0 -117 66 -118 244 -2 314 54 33 132 33 188 0z"/>
<path d="M480 805 c0 -8 -11 -25 -25 -39 -45 -45 -27 -87 46 -106 44 -12 58
-32 39 -55 -18 -21 -58 -19 -72 5 -15 23 -38 27 -38 6 0 -16 26 -46 41 -46 5
0 9 -7 9 -15 0 -8 9 -15 20 -15 11 0 20 6 20 14 0 8 8 17 18 21 11 3 24 16 30
29 17 38 -5 68 -61 84 -39 11 -47 17 -47 37 0 36 47 46 71 17 18 -23 39 -29
39 -12 0 6 -9 19 -20 30 -11 11 -24 20 -30 20 -5 0 -10 9 -10 20 0 11 -7 20
-15 20 -8 0 -15 -7 -15 -15z"/>
<path d="M255 432 c-42 -5 -198 -74 -203 -89 -6 -21 19 -15 105 22 63 27 94
35 142 35 55 0 64 -3 98 -34 41 -36 85 -52 175 -61 64 -7 88 -25 67 -51 -12
-14 -32 -16 -152 -12 -95 4 -137 2 -134 -5 6 -19 60 -29 167 -30 l105 -2 120
78 c124 80 175 97 175 57 0 -14 -31 -41 -107 -92 -188 -126 -264 -168 -300
-168 -20 0 -75 21 -143 55 -60 30 -117 55 -126 55 -18 0 -104 -49 -104 -59 0
-20 17 -18 59 5 l46 26 114 -56 c148 -72 170 -73 277 -8 107 65 264 170 292
195 24 22 29 66 10 85 -7 7 -26 12 -43 12 -18 0 -46 7 -64 16 -18 9 -41 14
-52 11 -11 -3 -35 1 -53 8 -43 18 -72 10 -155 -43 -72 -45 -84 -45 -149 7 -45
36 -105 51 -167 43z m460 -42 c-3 -5 -26 -21 -50 -35 -31 -19 -51 -24 -70 -19
l-26 7 43 28 c41 28 117 41 103 19z m94 -9 c10 -7 -4 -21 -55 -55 -63 -42 -70
-45 -81 -29 -7 9 -12 18 -10 19 7 7 123 74 127 74 3 0 11 -4 19 -9z"/>
</g>
</svg>
</div>
        <div class="sub_c_msg">Danke schön. Für Ihre Bestellung haben wir Ihre Bestellung erhalten.</div>
        <div class="sub_sub_c">Neurolab Vital GmbH DE80 7205 0000 0251 0811 13 Stadtsparkasse Augsburg Verwendungszweck: #5607</div>
        <a href="https://staging.neurolab-vital.de/nahrungsergaenzung/" class="retourn_shop"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#ffffff"></path> </g></svg>Zurück zum Shop</a>
    </div>
	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<?php
                //  wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); 
            ?>

			

		<?php endif; ?>
        <div class="main_check_warp">
            <div class="col_chek">
                <?php
                //  do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); 
                 ?>
                <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
               
            </div>
            <div class="col_chek">
               <div class="inner_detai_warp">
                    <div class="he_warp">Our bank details</div>
                    <div class="warp_bdy">
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Account owner:', 'woocommerce' ); ?></div>
                            <div class="col_wb">Neurolab Vital GmbH</div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Account number:', 'woocommerce' ); ?></div>
                            <div class="col_wb">251 081 113</div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Bank:', 'woocommerce' ); ?></div>
                            <div class="col_wb">Stadtsparkasse Augsburg</div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Routing number:', 'woocommerce' ); ?></div>
                            <div class="col_wb">720 500 00</div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'IBAN:', 'woocommerce' ); ?></div>
                            <div class="col_wb">DE80 7205 0000 0251 0811 13</div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'BIC Swift:', 'woocommerce' ); ?></div>
                            <div class="col_wb">AUGSDE77</div>
                        </div>
                    </div>
                </div>
                <div class="inner_detai_warp">
                    <div class="he_warp">Order Details</div>
                    <div class="warp_bdy">
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Order number:', 'woocommerce' ); ?></div>
                            <div class="col_wb"><?php echo $order->get_order_number();  ?></div>
                        </div>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Date:', 'woocommerce' ); ?></div>
                            <div class="col_wb"><?php echo wc_format_datetime( $order->get_date_created() );?></div>
                        </div>
                        <?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
                            <div class="row_wb">
                                <div class="col_wb title_wb"><?php esc_html_e( 'Email:', 'woocommerce' ); ?></div>
                                <div class="col_wb"><?php echo $order->get_billing_email();?></div>
                            </div>
				        <?php endif; ?>
                        <div class="row_wb">
                            <div class="col_wb title_wb"><?php esc_html_e( 'Total:', 'woocommerce' ); ?></div>
                            <div class="col_wb"><?php echo $order->get_formatted_order_total();?></div>
                        </div>
                        <?php if ( $order->get_payment_method_title() ) : ?>
                            <div class="row_wb">
                                <div class="col_wb title_wb"><?php esc_html_e( 'Payment method:', 'woocommerce' ); ?></div>
                                <div class="col_wb"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></div>
                            </div>
				        <?php endif; ?>
                    </div>
                </div>
                <?php
                    wc_get_template( 'order/order-details-customer.php', array( 'order' => $order ) );
                
                ?>
               
            </div>
        </div>


	<?php else : ?>

		<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

	<?php endif; ?>

</div>
<script>
jQuery(document).ready(function($) {
  // Select all elements with class .h_steps and add the active class
  $('.h_steps').addClass('active');
  console.log('testst');
  console.log($('.h_steps'));
 });
</script>