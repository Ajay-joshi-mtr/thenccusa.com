<?php
/**
 * YITH WooCommerce Recently Viewed Products
 */

if (!defined('YITH_WRVP')) {
    exit; // Exit if accessed directly
}

$loop = 0;
?>

<table id="ywrvp-custom-products-list">
    <tbody>
    <?php while ( $products->have_posts() ) : $products->the_post();

        $product_id = get_the_ID();
        $product    = wc_get_product( $product_id );
        if( ! $product ) {
            continue;
        }
        
        $product_link = ywrvp_campaign_build_link( $product->get_permalink() );
        if( defined('YITH_WCWL') && YITH_WCWL ) {
            $wishlist_link = ywrvp_campaign_build_link( YITH_WCWL()->get_wishlist_url() );
        }
        
        if( ! ( $loop++ % 2 ) ) : ?>
            <tr>
        <?php endif; ?>
            <td class="ywrvp-custom-product" width="49%">
                <table id="ywrvp-custom-product-info">
                    <tbody>
                    <tr>
                        <td class="product-image">
                            <?php echo yith_wrvp_get_mail_product_image( $product, $product_link ); ?>
                        </td>
                        <td class="product-info">
                            <h3>
                                <a href="<?php echo $product_link ?>">
                                    <?php the_title() ?>
                                </a>
                            </h3>
                            <div>
                                <?php wc_get_template('loop/price.php'); ?>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="product-action">
                            <div>
                                <a href="<?php echo $product_link ?>" class="mail-button"><?php _e('View Details', 'yith-woocommerce-recently-viewed-products' ) ?></a>
                            </div>
                            <?php if( defined('YITH_WCWL') && YITH_WCWL ) : ?>
                                <div>
                                    <a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product_id, $wishlist_link ) )?>" class="mail-button"><?php _e( 'Add to wishlist', 'yith-woocommerce-recently-viewed-products' ) ?></a>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        <?php if( ! ( $loop % 2 ) ) : ?>
            </tr>
            <tr style="height: 8px;"><td colspan="2" style="padding:0;"></td></tr>
        <?php else : ; ?>
            <td width="12" style="padding: 0;"></td>
        <?php endif; ?>

    <?php endwhile; // end of the loop. ?>

    </tbody>
</table>