<?php
/**
 * SakuraSea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SakuraSea
 */

//=================
//初始化主题 
//=================

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
//=================
//主题功能支持
//=================
add_theme_support('post-thumbnails');//支持文章封面Post Cover

//=================
//前端样式和脚本
//=================

add_action('wp_enqueue_scripts', 'skr_resource');
function skr_resource()
{

    // 1. 加载CSS文件
    wp_enqueue_style(
        'skr-style',
        get_stylesheet_uri(),
        array(),
        false,
        'all'
    );
    wp_enqueue_style(
        'skr-custom', // 添加前缀避免冲突
        get_theme_file_uri('/assets/css/custom.css'),
        array(), // 无依赖
        false, // 版本控制
        'all' // 媒体类型
    );
    wp_enqueue_style(
        'akr-content',
        get_theme_file_uri('/assets/css/single.css'),
        array(),
        false,
        'all'
    );

    // 2. 加载ICON FONT（CDN资源）
    wp_enqueue_style(
        'skr-icon-font',
        'https://at.alicdn.com/t/c/font_4991188_euotjdxwssc.css',
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

//=================
//主题选项刷新
//=================

add_action('update_option','skr_update_option',10,3);
function skr_update_option($option_name,$old_value,$new_value){

}

//=================
//个性化设置
//=================
// 取消工具栏
add_filter('show_admin_bar', '__return_false'); 

//=================
//主题数据处理
//=================
// 公安备案数字获取
function skr_get_the_icp_number($icpinfo){
    preg_match('/\d+/',$icpinfo, $icpNumber);
    return esc_html(($icpNumber[0])) ;
}
// 时间分段显示
function skr_get_the_time(){
    $pubTime =get_the_time('U');
    $currTime = current_time('U');//获取当前时间戳
    $timeDiff = $currTime - $pubTime;
    if($timeDiff < 60){
        $displayTime = '刚刚';//小于60s
    }elseif($timeDiff < 60*60){
        $displayTime = floor(($timeDiff/60)).'分钟前';//小于60分钟
    }elseif($timeDiff < 24*60*60){
        $displayTime = floor(($timeDiff/60/60)).'小时前';//小于24小时
    }elseif($timeDiff < 30*24*60*60){
        $displayTime = floor(($timeDiff/24/60/60)).'日前';//小于30天
    }elseif($timeDiff < 365*24*60*60){
        $displayTime = date('m-d',$pubTime);//小于一年
    }else{
        $displayTime = date('Y-m-d',$pubTime);
    }
    return esc_html($displayTime);
}
function skr_the_time(){
    echo skr_get_the_time();
}
?>