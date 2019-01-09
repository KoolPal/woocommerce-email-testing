<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// echo WooCommerce Email Templates
$templates = file_get_contents('https://s3.amazonaws.com/affiliate.themes.email/woocommerce/templates.html');
echo $templates;
?>