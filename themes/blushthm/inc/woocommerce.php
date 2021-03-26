<?php
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 0 );

function blushthm_woocommerce_single_product_summary_subtitle() {
    echo '<b style="color: #fff1f6;">Look at the amazing price!!</b>';
}
add_action( 'woocommerce_single_product_summary', 'blushthm_woocommerce_single_product_summary_subtitle', 2 );

function blushthm_woocommerce_before_add_to_cart_quantity_test() {
    
}
add_action( 'woocommerce_before_add_to_cart_quantity', 'blushthm_woocommerce_before_add_to_cart_quantity_test', 5 );