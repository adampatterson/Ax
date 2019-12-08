<?php
if (is_user_logged_in()):
    if (isset($data)): ?>
        <script>
            window.data = <?= json_encode($data) ?>
            // ACF Data
            console.log(window.data)
        </script>
    <?php endif;

    if (isset($products)): ?>
        <script>
            window.product = <?= json_encode($products) ?>
            // is product
            console.log(window.product)
        </script>
    <?php endif;
    if (class_exists('WooCommerce')): ?>
        <script>
            // Is WooCommerce Installed
            window.woo = <?= json_encode([
                'is_shop'             => is_shop(),
                'is_product_category' => is_product_category(),
                'is_product_tag'      => is_product_tag(),
                'is_product'          => is_product(),
                'is_cart'             => is_cart(),
                'is_checkout'         => is_checkout(),
                'is_account_page'     => is_account_page(),
                'template_file'       => show_template()
            ]); ?>;
            console.log(window.woo)
        </script>
    <?php endif;
endif; ?>
