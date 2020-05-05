<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

$orderby = 'name';
$order = 'asc';
$hide_empty = false ;
$cat_args = array(
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
);
 
$product_categories = get_terms( 'product_cat', $cat_args );

get_header( 'shop' );

$banner = get_field( 'banner', get_option( 'woocommerce_shop_page_id' ) );

?>

<section class="w-5/6 md:w-11/12 mx-auto rounded overflow-hidden mt-8 dh-shadow">
	<div class="product-banner flex flex-col relative text-white">
		<div class="absolute inset-0 top-0 left-0">
			<?php echo wp_get_attachment_image( $banner['image'], 'large', false, array( 'class' => 'w-full h-full object-cover' ) ); ?>
			<div class="banner__overlay absolute inset-0 top-0 left-0"></div>
		</div>
		<div class="flex-1 md:aspect-content p-8 py-16 md:py-8 lg:p-16 flex flex-col items-start justify-center relative h-full w-full md:w-4/5 lg:w-3/5 max-w-3xl">
			<h2 class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl leading-tight"><?php echo $banner['heading']; ?></h2>
			<div class="mt-8 leading-relaxed lg:text-lg xl:text-xl"><?php echo $banner['description']; ?></div>
			<p class="mt-12"><a class="inline-block border border-white rounded py-3 px-12 font-bold" href="<?php echo $banner['link']['link_url']; ?>"><?php echo $banner['link']['link_text']; ?></a></p>
		</div>
	</div>
</section>


<section class="w-5/6 md:w-11/12 mx-auto <?php echo is_paged() ? 'mt-16' : 'mt-16 md:mt-24'; ?> pb-24" id="products">
	<header class="flex flex-col md:flex-row justify-between items-center">
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="capitalize text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">Dr. Hannen Health Products</h1>
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action( 'woocommerce_archive_description' );
		?>
	</header>
	
		<?php

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' ); ?>

			<div class="flex flex-col md:flex-row mt-8 md:mt-12 items-start">
					<aside class="w-full md:max-w-xs flex-shrink-0 md:mr-8 rounded dh-shadow bg-brand-navy p-4 mt-8 md:mt-0">
						<p class="uppercase text-white p-4">Product Categories</p>
						<ul class="flex flex-col">
							<li>
								<a class="block text-white font-bold rounded p-4 <?php echo is_shop() ? "category-active" : ""; ?>" href="<?php echo home_url( '/shop#products' ); ?>">All Products</a>
							</li>
							<?php foreach ( $product_categories as $category ) : if ($category->slug !== 'uncategorized') : ?>
								<li>
									<a class="block text-white font-bold rounded p-4 <?php echo is_product_category( $category->slug ) ? "category-active" : ""; ?>" href="<?php echo get_term_link( $category ); ?>#products"><?php echo $category->name; ?></a>
								</li>
							<?php endif; endforeach; ?>
						</ul>
					</aside>

					<div class="flex-1">
						<?php if ( woocommerce_product_loop() ) :

							woocommerce_product_loop_start();

							if ( wc_get_loop_prop( 'total' ) ) :
								while ( have_posts() ) :
									the_post();

									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'product' );
								endwhile;
							endif;

							woocommerce_product_loop_end();
			
							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );
						else :
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
						endif; ?>
					</div>
				</div>
</section>

<?php

get_footer( 'shop' );
