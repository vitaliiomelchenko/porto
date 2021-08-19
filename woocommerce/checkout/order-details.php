<div class="order checkout-table">
    <h4 class="bold uppercase" id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h4>
    <table class="shop_table woocommerce-table">
    	<thead>
    		<tr>
    			<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
    			<th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    			do_action( 'woocommerce_review_order_before_cart_contents' );
    
    			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    
    				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
    					?>
    					<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
    						<td class="product-name">
    							<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
    							<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', '<strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
    							<?php echo WC()->cart->get_item_data( $cart_item ); ?>
    						</td>
    						<td class="product-total">
    							<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
    						</td>
    					</tr>
    					<?php
    				}
    			}
    
    			do_action( 'woocommerce_review_order_after_cart_contents' );
    		?>
    	</tbody>
    </table>
</div>