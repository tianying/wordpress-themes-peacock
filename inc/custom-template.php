<?php

/**
 * Custom Template
 */


// 自定义查询变量
function prefix_register_query_var() {
	add_rewrite_tag('%category%', '([^&]+)');
	add_rewrite_tag('%paged%', '([^&]+)');
}
add_action('init', 'prefix_register_query_var', 10, 0);

// 定义 自定义类型 URL Rewrite
function prefix_custom_type_rewrite_rule()
{      
    global $wp_rewrite;

	add_rewrite_rule('^test/([^/]*)/([0-9]+)/?','index.php?post_type=test&tax=news_category&category=$matches[1]&paged=$matches[2]','top');

	add_rewrite_rule('^news/([^/]*)/page/([0-9]+)/?','index.php?post_type=test&tax=news_category&category=$matches[1]&paged=$matches[2]','top');

	add_rewrite_rule('^news/([^/]*)/?','index.php?post_type=news&tax=news_category&category=$matches[1]&paged=1','top');

	add_rewrite_rule('^archives/news/([a-z]+)/?','index.php?post_type=news&tax=news_category','top');



	add_rewrite_rule( '/responsibility/?$', array(
		'post_type' => 'responsibility',
		'paged'   => '1'
	) );	

	add_rewrite_rule( '/responsibility/page/?([0-9]+)/?$', array(
		'post_type' => 'responsibility',
		'paged'   => '$matches[1]'
	) );

	$wp_rewrite->flush_rules();

}

add_action( 'init', 'prefix_custom_type_rewrite_rule' );

// 判断自定义类型，加载指定模版
function prefix_custom_type_url_rewrite_templates(  ) {

	//global $wp_query;
	
	//echo var_dump( $wp_query );
	//echo var_dump( $wp_query->query_vars );

	if ( preg_match( '/test\/([a-z]+)\/([0-9]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/test.php');
        exit;
    }

	if ( preg_match( '/archives\/news\/([a-z]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news-content.php');
        exit;
    }

	if ( preg_match( '/news\/([a-z]+)\/page\/([0-9]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news.php');
        exit;
    }

	if ( preg_match( '/news\/([a-z]+)/', add_query_arg(array()) ) ) {
		include (get_template_directory() . '/template/news.php');
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
