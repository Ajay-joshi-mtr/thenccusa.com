<?php
/**
 * Shortcode tab template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Recently Viewed Products
 * @version 1.0.0
 */

if (!defined('YITH_WRVP')) {
    exit;
} // Exit if accessed directly

$options = YITH_WRVP_DIR . '/plugin-options/general-options.php';
$shortcode_options = array();

if( file_exists( $options ) ) {
    $shortcode_options = include( $options );
}

if( empty( $shortcode_options ) && ! isset( $shortcode_options['general'] ) ){
    echo '<p>' . __( 'No shortcode options was found. Please check file in plugin-options/general-options.php', 'yith-woocommerce-recently-viewed-products' ) . '</p>';
    return;
}
?>

<h3><?php _e('Build your own shortcode', 'yith-woocommerce-recently-viewed-products') ?></h3>

<div class="yith-wrvp-shortcode-tab">

    <div class="shortcode-options">

        <h4><?php _e('Choose shortcode attributes', 'yith-woocommerce-recently-viewed-products') ?></h4>

        <table class="form-table">
            <tbody>

            <?php foreach( $shortcode_options['general'] as $option ) :

                // check if option if also for shortcode, else continue
                if( ! isset( $option[ 'shortcode_name' ] ) )
                    continue;

                // get option from db, let's general options synchronized
                $db_value = get_option( $option['id'] );

            ?>

                <tr>
                    <th>
                        <label for="<?php echo $option['id'] ?>"><?php echo isset( $option['title'] ) ? $option['title'] : '' ?></label>
                    </th>
                    <td>
                        <?php if( $option['type'] == 'select' ) : ?>
                            <select name="<?php echo $option[ 'shortcode_name' ] ?>" id="<?php echo $option[ 'id' ] ?>" class="shortcode-option"
                                <?php if( isset( $option['custom_attributes'] ) ) :
                                    foreach( $option['custom_attributes'] as $key => $value ):
                                        echo $key . '="' . $value . '"';
                                    endforeach;
                                endif;
                                ?>>
                                <?php foreach ( $option['options'] as $key => $value ) : ?>
                                    <option value="<?php echo $key ?>" <?php selected( $db_value, $key ) ?>><?php echo $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php elseif( $option['type'] == 'checkbox' ) : ?>
                            <input type="checkbox" name="<?php echo $option[ 'shortcode_name' ] ?>" id="<?php echo $option[ 'id' ] ?>" class="shortcode-option"
                                   value="yes" data-novalue="no" <?php checked( $db_value, 'yes' ) ?>
                                <?php if( isset( $option['custom_attributes'] ) ) :
                                    foreach( $option['custom_attributes'] as $key => $value ):
                                        echo $key . '="' . $value . '"';
                                    endforeach;
                                endif;
                                ?>/>
                        <?php else: ?>
                            <input type="<?php echo $option['type'] ?>" name="<?php echo $option[ 'shortcode_name' ] ?>" id="<?php echo $option[ 'id' ] ?>"
                                   class="shortcode-option" value="<?php echo $db_value ?>" <?php echo isset( $option['css'] ) ? 'style="'.$option['css']. '"' : '' ?>
                                <?php if( isset( $option['custom_attributes'] ) ) :
                                        foreach( $option['custom_attributes'] as $key => $value ):
                                            echo $key . '="' . $value . '"';
                                        endforeach;
                                    endif;
                                ?>/>
                        <?php endif; ?>
                    </td>
                </tr>


                <?php if( $option['id'] == 'yith-wrvp-cat-most-viewed' ): ?>
                <tr>
                    <th>
                        <label for="yith_cats_id"><?php _e( 'Categories to show', 'yith-woocommerce-recently-viewed-products' ) ?></label>
                    </th>
                    <td>
                        <?php
                        yit_add_select2_fields( array(
                            'class' => 'shortcode-option wc-product-search',
                            'id'    => 'yith_cats_id',
                            'name'  => 'yith_cats_id',
                            'data-placeholder' => __( 'Search for a category&hellip;', 'yith-woocommerce-recently-viewed-products' ),
                            'data-multiple' => true,
                            'data-action' => 'yith_wrvp_search_product_cat',
                            'custom-attributes' => array(
                                'data-deps' => 'yith-wrvp-cat-most-viewed',
                                'data-deps_value' => 'no'
                            )
                        ) );
                        ?>
                    </td>
                </tr>
                <?php endif; ?>


                <?php if( $option['id'] == 'yith-wrvp-view-all-text' ): ?>
                <tr>
                    <th>
                        <label for="yith_view_all_link"><?php _e( '"View All" link', 'yith-woocommerce-recently-viewed-products' ) ?></label>
                    </th>
                    <td>
                        <input type="text" class="shortcode-option" style="min-width: 300px;" id="yith_view_all_link" name="yith_view_all_link" value="" />
                    </td>
                </tr>
                <?php endif; ?>

            <?php endforeach; ?>

            </tbody>
        </table>

    </div>

    <div class="shortcode-preview">
        <?php echo '[yith_similar_products]' ?>
    </div>
    <span class="description"><?php _e('Copy and paste this shortcode in your page.', 'yith-woocommerce-recently-viewed-products'); ?></span>

</div>
