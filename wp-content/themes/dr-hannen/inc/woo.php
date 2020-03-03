<?php 

// Hide Product Category Count
add_filter( 'woocommerce_subcategory_count_html', 'dr_hide_count' );

function dr_hide_count() {
  /* empty - no count */
}

// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

// Moving the catalog section up
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woocommerce_archive_description', 'woocommerce_catalog_ordering', 90 );

add_shortcode( 'dr_cart_button', 'dr_cart_button' );

function dr_cart_button() {
  $cart_url   = wc_get_cart_url();
  $cart_count = WC()->cart->cart_contents_count;
  return dr_cart_button_base($cart_url, $cart_count);
}

add_filter( 'woocommerce_add_to_cart_fragments', 'dr_cart_button_update' );

/**
 * Add AJAX Shortcode when cart contents update
 */
function dr_cart_button_update( $fragments ) {
 
  $cart_url = wc_get_cart_url();
  $cart_count = WC()->cart->cart_contents_count;
  $button = dr_cart_button_base($cart_url, $cart_count);
  
  if ( ! empty( $button ) ) :
    $fragments['a.cart-button'] = $button;
  endif;

  return $fragments;
}

function dr_cart_button_base($url = '', $count = 0) {
  ob_start(); if ( $count > 0 ) : ?>
    <a class="cart-button uppercase text-sm font-bold flex items-center bg-transparent text-brand-navy py-1 px-2 rounded ml-4 relative z-50 flex items-center border border-brand-navy" href="<?php echo esc_attr( $url ); ?>">
      <span>Cart</span>
      <span class="font-base ml-2"><?php echo $count; ?></span>
    </a>
  <?php endif; return ob_get_clean();
}