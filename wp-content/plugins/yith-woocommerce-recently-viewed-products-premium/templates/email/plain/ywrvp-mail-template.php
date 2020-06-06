<?php
/**
 * YITH WooCommerce Recently Viewed Products Mail Template Plain
 *
 * @author YITH
 * @package YITH WooCommerce Recently Viewed Products
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WRVP' ) ) exit; // Exit if accessed directly

echo $email_heading . "\n\n";

echo nl2br( $email_content ). "\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );