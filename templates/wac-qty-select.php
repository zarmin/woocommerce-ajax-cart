<div class="quantity">
    <select name="<?php echo esc_attr( $input_name ); ?>"
            title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>"
            class="input-text qty text"
            max="<?php echo wac_option('select_items'); ?>">
        <?php for ( $i = intval(wac_option('min_value')); $i <= wac_option('select_items') && ( empty($max_value) || $i <= intval(wac_option('max_value')) ); $i += intval(wac_option('increment')) ): ?>
            <option <?php if ( esc_attr( $input_value ) == $i ): ?>selected="selected"<?php endif; ?>
                    value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
        <?php endfor; ?>
    </select>
</div>
