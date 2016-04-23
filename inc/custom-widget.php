<?php

/**
 * Register Custom Widget
 */


// Product Filter
function product_filter_widgets_init() {
	 register_sidebar( array(
			   'name'          => __( 'Product Filter', '产品筛选' ),
			   'id'            => 'product-filter',
			   'description'   => __( '产品筛选', '产品筛选' ),
			   'before_widget' => '',
			   'after_widget'  => '',
			   'before_title'  => '',
			   'after_title'   => '',
			 ));
	}

add_action( 'widgets_init', 'product_filter_widgets_init' );

// Product Recommendation
function product_recommendation_widgets_init() {
	 register_sidebar( array(
			   'name'          => __( 'Product Recommendation', '产品推荐' ),
			   'id'            => 'product-recommendation',
			   'description'   => __( '产品推荐', '产品推荐' ),
			   'before_widget' => '',
			   'after_widget'  => '',
			   'before_title'  => '',
			   'after_title'   => '',
			 ));
	}

add_action( 'widgets_init', 'product_recommendation_widgets_init' );
