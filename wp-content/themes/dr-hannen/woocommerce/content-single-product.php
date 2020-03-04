<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'flex lg:flex-wrap flex-col lg:flex-row lg:items-start lg:justify-between max-w-4xl w-4/5 mx-auto mt-20 md:mt-24 lg:mt-32 pb-12 md:pb-16 lg:pb-24', $product ); ?>>

	<div class="product-image flex flex-col">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
		<div class="uppercase tracking-wide font-bold flex items-center mt-4 self-end lg:self-start">
			<p>Share:</p>
			<ul class="flex items-center">
				<li class="h-4 ml-4">
					<a
						href="http://twitter.com/home?status=<?php the_title(); ?>+<?php echo urlencode( get_the_permalink() );?>"
						onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"
						class="text-black hover:text-brand-cyan"><?php dh_display_twitter(); ?></a>
				</li>
				<li class="h-4 ml-4">
					<a
						href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php echo urlencode( get_the_permalink() );?>&amp;p[images][0]=<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>"
						onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"
						class="text-black hover:text-brand-cyan"><?php dh_display_facebook(); ?></a>
				</li>
				<li class="h-4 ml-4">
					<a
						href="http://pinterest.com/pin/create/link/?media=<?php echo urlencode( get_the_post_thumbnail_url() ); ?>&amp;url=<?php echo urlencode( get_the_permalink() );?>&amp;is_video=false&amp;description=<?php echo urlencode( get_the_title() ); ?>"
						onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"
						class="text-black hover:text-brand-cyan"><?php dh_display_pinterest(); ?></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
