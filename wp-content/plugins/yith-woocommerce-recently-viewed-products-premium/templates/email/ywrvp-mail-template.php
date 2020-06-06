<?php
/**
 * YITH WooCommerce Recently Viewed Products Mail Template
 *
 * @author YITH
 * @package YITH WooCommerce Recently Viewed Products
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WRVP' ) ) exit; // Exit if accessed directly

do_action('woocommerce_email_header', $email_heading, $email );
?>
<p>
	<?php echo wpautop( $email_content ) ?>
</p>

<?php do_action('woocommerce_email_footer', $email); ?>