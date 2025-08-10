<?php
/**
 * SakuraSea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SakuraSea
 */

// 载入主题 
add_filter('show_admin_bar','__return_false');// 取消工具栏
add_action('after_setup_theme','skr_setup');
function skr_setup(){
    // 主题功能
    // 注册菜单
    register_nav_menus(array(
        'primary' => '顶部菜单',
        'footer' => '页脚菜单',
        'user' => '用户菜单'
    ));
}

//资源加载
add_action('wp_enqueue_scripts', 'skr_resource');
function skr_resource()
{

    // 1. 加载CSS文件
    wp_enqueue_style(
        'skr-custom', // 添加前缀避免冲突
        get_theme_file_uri('/assets/css/custom.css'),
        array(), // 无依赖
        false, // 版本控制
        'all' // 媒体类型
    );

    // 2. 加载ICON FONT（CDN资源）
    wp_enqueue_style(
        'skr-icon-font',
        'https://at.alicdn.com/t/c/font_4991188_euiujofr1og.css',
        array(),
        null, // CDN资源不适用版本控制
        'all'
    );

    // 3. 加载JS文件
    wp_enqueue_script(
        'skr-main',
        get_theme_file_uri('/assets/js/main.js'),
        array(), 
        false,
        true // 在页脚加载
    );
}

?>