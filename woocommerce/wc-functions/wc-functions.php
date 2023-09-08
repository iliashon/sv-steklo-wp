<?php
add_action('woocommerce_before_single_product_summary', 'wrapper_product_image_start', 5);
function wrapper_product_image_start() {
    ?>
    <div class="product-block">
    <?php
}

add_action('woocommerce_after_single_product_summary', 'wrapper_product_image_end', 18);
function wrapper_product_image_end() {
    ?>
    </div>
    <?php
}

add_action('woocommerce_before_single_product_summary', 'wrapper_product_discription_start', 25);
function wrapper_product_discription_start() {
    ?>
    <div class="discription-product">
    <?php
}

add_action('woocommerce_after_single_product_summary', 'wrapper_product_discription_end', 17);
function wrapper_product_discription_end() {
    ?>
    </div>
    <?php
}