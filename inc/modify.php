<?php

/**
 * Register Modify Template
 */


remove_action( 'wp_head', 'wp_generator' );

// Remove Admin Login Header
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
//add_action('get_header', 'remove_admin_login_header');

//add_action( 'admin_head', 'fb_move_admin_bar' );

// Remove OpenSans
function remove_open_sans() {    
    wp_deregister_style( 'open-sans' );    
    wp_register_style( 'open-sans', false );    
    wp_enqueue_style('open-sans','');    
}    
add_action( 'init', 'remove_open_sans' );

// Replace the resource library

//function izt_cdn_callback($buffer) {return str_replace('googleapis.com', 'useso.com', $buffer);}
//function izt_buffer_start() {ob_start("izt_cdn_callback");}
//function izt_buffer_end() {ob_end_flush();}
//add_action('init', 'izt_buffer_start');
//add_action('shutdown', 'izt_buffer_end');

// 屏蔽左侧菜单
function remove_menus() {
    global $menu;
    $restricted = array(
        __('Posts'),
        __('Comments')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(strpos($value[0], '<') === FALSE) {
            if(in_array($value[0] != NULL ? $value[0]:"" , $restricted)){
                unset($menu[key($menu)]);
            }
        }else {
        $value2 = explode('<', $value[0]);
            if(in_array($value2[0] != NULL ? $value2[0]:"" , $restricted)){
                unset($menu[key($menu)]);
            }
        }
    }
}
if (is_admin()){
    // 屏蔽左侧菜单
    add_action('admin_menu', 'remove_menus');
}

// 删除子菜单
function remove_submenu() {
    // 删除”仪表盘”下面的子菜单”更新”
    remove_submenu_page('index.php', 'update-core.php');
    // 删除”设置”下面的子菜单”隐私”
    remove_submenu_page('options-general.php', 'options-permalink.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
    // 删除”外观”下面的子菜单”编辑”
    remove_submenu_page('themes.php', 'theme-editor.php');
}
if (is_admin()){
    //删除子菜单
    add_action('admin_init','remove_submenu');
}

// 屏蔽后台更新模块
function wp_hide_nag() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wp_hide_nag');

// 屏蔽后台仪表盘无用模块
function example_remove_dashboard_widgets() {
    // Globalize the metaboxes array, this holds all the widgets for wp-admin
    global $wp_meta_boxes;
    // 以下这一行代码将删除 "快速发布" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    // 以下这一行代码将删除 "引入链接" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // 以下这一行代码将删除 "插件" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    // 以下这一行代码将删除 "近期评论" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // 以下这一行代码将删除 "近期草稿" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // 以下这一行代码将删除 "WordPress 开发日志" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // 以下这一行代码将删除 "其它 WordPress 新闻" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    // 以下这一行代码将删除 "概况" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );
