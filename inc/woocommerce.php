<?php

/**
 * Woocommerce
 */


/*
|--------------------------------------------------------------------------
| 在主题中声明对WooCommerce的支持
|--------------------------------------------------------------------------
*/

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/*
|--------------------------------------------------------------------------
| 设置WooCommerce样式
|--------------------------------------------------------------------------
*/

// 禁用WooCommerce默认样式
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// 设置WooCommerce默认样式
function wp_enqueue_woocommerce_style(){
    wp_register_style( 'woocommerce', get_template_directory_uri() . '/woocommerce/dist/css/woocommerce.css' );
    if ( class_exists( 'woocommerce' ) ) {
        wp_enqueue_style( 'woocommerce' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );


/*
|--------------------------------------------------------------------------
| 设置面包屑导航
|--------------------------------------------------------------------------
*/

// Code source： https://gist.github.com/dwiash/4064836
function my_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '<span class="delimiter">&#47;</span>',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
 
add_filter( 'woocommerce_breadcrumb_defaults', 'my_woocommerce_breadcrumbs' );
