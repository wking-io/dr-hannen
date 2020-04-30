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

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
 
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

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

add_action('woocommerce_after_shop_loop_item', 'dr_product_open_actions', 9);
add_action('woocommerce_after_shop_loop_item', 'dr_product_link_action', 11);
add_action('woocommerce_after_shop_loop_item', 'dr_product_close_actions', 12);

function dr_product_open_actions() {
  ob_start(); ?>
    <div class="flex p-6">
  <?php echo ob_get_clean();
}

function dr_product_link_action() {
  global $product;
  $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
  ob_start(); ?>
    <a class="uppercase underline text-sm font-bold flex items-center bg-transparent text-grey-500 py-1 px-2 rounded ml-4 relative z-50 flex items-center" href="<?php echo $link ?>">Learn More</a>
  <?php echo ob_get_clean();
}

function dr_product_close_actions() {
  ob_start(); ?>
    </div>
  <?php echo ob_get_clean();
}

function dr_get_gallery_image_html( $attachment_id, $main_image = false ) {
  $flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
	$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
	$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
	$image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
	$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
	$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
	$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
	$alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
	$image             = wp_get_attachment_image(
		$attachment_id,
		$image_size,
		false,
		apply_filters(
			'woocommerce_gallery_image_html_attachment_image_params',
			array(
				'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-src'                => esc_url( $full_src[0] ),
				'data-large_image'        => esc_url( $full_src[0] ),
				'data-large_image_width'  => esc_attr( $full_src[1] ),
				'data-large_image_height' => esc_attr( $full_src[2] ),
				'class'                   => esc_attr( $main_image ? 'wp-post-image' : '' ),
			),
			$attachment_id,
			$image_size,
			$main_image
		)
	);

	return '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image"><a target="_blank" href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';
}