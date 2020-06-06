<?php
/**
 * YITH WooCommerce Recently Viewed Products
 *
 * @version 1.0.1
 */

if ( ! defined( 'YITH_WRVP' ) ) {
    exit; // Exit if accessed directly
}

global $woocommerce_loop;

if( $columns )
    $woocommerce_loop['columns'] = $columns;
else
    $columns = 4;

// set slider
$slider = ( $slider == 'yes' && $products->post_count > $columns );
?>

<div class="woocommerce yith-similar-products cols-<?php echo $columns ?> <?php echo $class ?>" data-slider="<?php echo $slider ? '1' : '0' ?>"
     data-autoplay="<?php echo $autoplay == 'yes' ? '1' : '0' ?>" data-numcolumns="<?php echo $columns ?>" data-autoplayspeed="<?php echo $autoplay_speed ?>">

      <h2><?php echo esc_html( $title ) ?>
        <?php if( ! empty( $view_all ) ) : ?>
            <a href="<?php echo esc_url( $page_url ) ?>" class="shop-link"><?php echo esc_html( $view_all ) ?></a>
        <?php endif; ?>
      </h2>

    <?php woocommerce_product_loop_start(); ?>

    <?php while ( $products->have_posts() ) : $products->the_post(); ?>

        <?php wc_get_template_part('content', 'product'); ?>

    <?php endwhile; // end of the loop. ?>

    <?php woocommerce_product_loop_end(); ?>

</div>