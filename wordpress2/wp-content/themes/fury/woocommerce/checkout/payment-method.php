<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="card">
    <div class="card-header" role="tab">
        <h6>
            <a href="#collapse<?php echo esc_attr( $gateway->id ); ?>" data-toggle="collapse" data-parent="accordion-wc-checkout">
                <?php echo $gateway->get_title(); ?>
            </a> 
        </h6>
    </div>
    <div class="collapse" id="collapse<?php echo esc_attr( $gateway->id ); ?>" role="tabpanel">
        <div class="card-body">
            <p class="wc_payment_method payment_method_<?php echo $gateway->id; ?>">
                <input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />

                <label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>">
                    <?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?> <?php echo $gateway->get_icon(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
                </label>
                <?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
                    <div class="payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
                        <?php $gateway->payment_fields(); ?>
                    </div>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>
