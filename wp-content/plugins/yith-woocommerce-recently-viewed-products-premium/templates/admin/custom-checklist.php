<?php
/**
 * Admin View: Custom checklist type
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$custom_attributes = '';
if ( !empty( $value['custom_attributes'] ) && is_array( $value['custom_attributes'] ) ) {
	foreach ( $value['custom_attributes'] as $attribute => $attribute_value ) {
		$custom_attributes .= esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
	}
}

?>
<tr valign="top">
	<th scope="row" class="titledesc">
		<label for="<?php echo esc_attr( $value['id'] ); ?>"><?php echo esc_html( $value['title'] ); ?></label>
	</th>
	<td class="forminp forminp-<?php echo sanitize_title( $value['type'] ) ?>">

		<div class="ywrvp-checklist-div " style="vertical-align: top; margin-bottom: 3px; <?php echo esc_attr( $value['css'] ) ?>" id="<?php echo esc_attr( $value['id'] ); ?>">
			<input
				type="hidden"
				id="<?php echo esc_attr( $value['id'] ); ?>"
				class="ywrvp-values"
				name="<?php echo esc_attr( $value['id'] ); ?>"
				value="<?php echo $option_value; ?>"
			/>

			<div class="ywrvp-value-list select2-container-multi">
				<ul class="select2-choices">

				</ul>
				<div class="ywrvp-checklist-ajax">
					<input
						type="text"
						id="ywrvp-new-element-<?php echo esc_attr( $value['id'] ); ?>"
						class="ywrvp-insert select2-input form-input-tip"
						autocomplete="off"
						autocorrect="off"
						autocapitalize="off"
						spellcheck="false"
						placeholder="<?php echo esc_attr( $value['placeholder'] ); ?>"
						style="margin: 0; width: 100%; border: 1px solid #ccc; border-top: 0 none;" <?php echo $custom_attributes ?>/>
				</div>
			</div>
		</div>
		<span class="description"><?php echo $value['desc']; ?></span>

	</td>
</tr>
