<?php

/**
 * Custom Template
 */


// 自定义查询变量
function prefix_register_query_var() {

}
add_action('init', 'prefix_register_query_var', 10, 0);

// 定义 自定义类型 URL Rewrite
function prefix_custom_type_rewrite_rule()
{      
    //global $wp_rewrite;

	add_rewrite_rule( '/news/?$', array(
		'post_type' => 'news',
		'paged'   => '1'
	) );	

	add_rewrite_rule( '/news/page/?([0-9]+)/?$', array(
		'post_type' => 'news',
		'paged'   => '$matches[1]'
	) );

	add_rewrite_rule( '/responsibility/?$', array(
		'post_type' => 'responsibility',
		'paged'   => '1'
	) );	

	add_rewrite_rule( '/responsibility/page/?([0-9]+)/?$', array(
		'post_type' => 'responsibility',
		'paged'   => '$matches[1]'
	) );

}

add_action( 'init', 'prefix_custom_type_rewrite_rule' );

// 判断自定义类型，加载指定模版
function prefix_custom_type_url_rewrite_templates(  ) {

	//global $wp_query;
	
	//echo var_dump( $wp_query );
	//echo var_dump( $wp_query->query_vars );

	if ( preg_match( '/news\/$/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news.php');
        exit;
    }

	if ( preg_match( '/news\/page\/([0-9]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news.php');
        exit;
    }

	if ( preg_match( '/news\/([a-z]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news-content.php');
        exit;
    }

	if ( preg_match( '/responsibility\/$/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/responsibility.php');
        exit;
    }

	if ( preg_match( '/responsibility\/page\/([0-9]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/responsibility.php');
        exit;
    }

	if ( preg_match( '/responsibility\/([a-z]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/responsibility-content.php');
        exit;
    }

}
add_action('template_redirect', 'prefix_custom_type_url_rewrite_templates');
