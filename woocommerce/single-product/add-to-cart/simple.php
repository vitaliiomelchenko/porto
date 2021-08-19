<?php
/**
 * Simple product add to cart
 *
 * @version     3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ){ ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<div class="cart">
    	<div class="quantity">
	        <input class="input-text qty text" type="number" step="1" size="4" pattern="[0-9]*" inputmode="numeric" min="1" max="" value="1" />
    	</div>
	    <a rel="nofollow" href="<?=get_permalink(wc_get_page_id('shop'))?>?add-to-cart=<?=esc_attr($product->get_id())?>" data-quantity="1" data-product_id="<?=esc_attr($product->get_id())?>" data-product_sku="" class="add_to_cart_button ajax_add_to_cart cart-btn single_add_to_cart_button button alt" title="<?=esc_html($product->single_add_to_cart_text())?>"><?=esc_html($product->single_add_to_cart_text())?></a>
	</div>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php } ?>

<div class="shipping-free-notice">
	<?php
		$lang = qtranxf_getLanguage();
		if($lang == 'ua') $free = 'Доставка товару - <strong>безкоштовно!</strong>';
		if($lang == 'ru') $free = 'Доставка товара - <strong>бесплатно!</strong>';
		if($lang == 'en') $free = 'Shipping - <strong>free!</strong>';
		echo $free;
	?>
</div>