<?php 
global $product;
?>

<div class="flex items-center mt-2">
  <p>Our price: <span class="font-bold"><?php echo get_woocommerce_currency_symbol().$product->get_sale_price(); ?></span></p>
  <p class="ml-6">Compare at: <span class="font-bold text-grey-500 line-through"><?php echo get_woocommerce_currency_symbol().$product->get_regular_price(); ?></span></p>
</div>