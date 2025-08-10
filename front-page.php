<?php 
/**
* The front-page for our theme
*
* @package SakuraSea
* @author Char
*/
?>
<?php get_header() ?>
<!--  banner  -->
<div class="banner">
    <div class="banner-title">SakuraSea</div>
    <i class="iconfont icon-down"></i>
</div>

<!-- TODO -->
<div class="wrapper-l white">
    <div style="font-size: 2em; color:#81acd4;width:100%;text-align:center;">TODO</div>
    <i class="iconfont icon-confirm">hooks排队加载CSS/JS</i>
    <i class="iconfont icon-edit">页面结构标准化🙃让我去死算了</i>
    <i class="iconfont icon-edit">背景切换模块</i>
    <i class="iconfont icon-edit">通知条</i>
    <i class="iconfont icon-edit">动态菜单栏</i>
    <i class="iconfont icon-edit">搜索表单</i>
    <i class="iconfont icon-edit">用户菜单</i>
    <i class="iconfont icon-edit">分类栏</i>
    <i class="iconfont icon-edit">侧边栏</i>
</div>

<!-- 文章列表 -->
<div class="main-body">
    <div class="posts-list">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/posts');
        ?>

        <?php
        endwhile;
        the_posts_pagination(array(
            'mid_size' => 4,
            'prev_text' => '<i class="iconfont icon-left-double-arrow"></i>',
            'next_text' => '<i class="iconfont icon-right-double-arrow"></i>',
            'screen_reader_text' => ' ',
        ));
        ?>
    </div>

    <!-- 1. 基本模板函数
get_header() - 引入头部模板

get_footer() - 引入底部模板

get_sidebar() - 引入侧边栏模板

get_template_part() - 引入子模板文件

bloginfo() - 显示博客信息

wp_title() - 显示页面标题

body_class() - 输出 body 的 class

2. 循环相关函数
have_posts() - 检查是否有文章

the_post() - 设置当前文章

the_title() - 显示文章标题

the_content() - 显示文章内容

the_excerpt() - 显示文章摘要

the_permalink() - 获取文章链接

the_post_thumbnail() - 显示特色图像

the_time() - 显示文章时间

the_category() - 显示文章分类

the_tags() - 显示文章标签

comments_template() - 引入评论模板

3. 导航菜单函数
wp_nav_menu() - 显示导航菜单

register_nav_menus() - 注册菜单位置

has_nav_menu() - 检查是否有菜单

二、插件开发常用函数
1. 钩子函数
add_action() - 添加动作钩子

add_filter() - 添加过滤器钩子

do_action() - 执行动作钩子

apply_filters() - 应用过滤器

remove_action() - 移除动作

remove_filter() - 移除过滤器

2. 选项和设置
get_option() - 获取选项值

update_option() - 更新选项

add_option() - 添加新选项

delete_option() - 删除选项

get_theme_mod() - 获取主题定制值

set_theme_mod() - 设置主题定制值

3. 用户相关函数
wp_get_current_user() - 获取当前用户

get_userdata() - 获取用户数据

wp_create_user() - 创建新用户

wp_update_user() - 更新用户信息

is_user_logged_in() - 检查用户是否登录

current_user_can() - 检查用户权限

三、数据库查询函数
1. 文章查询
WP_Query 类 - 高级文章查询

get_posts() - 获取文章数组

get_page() - 获取页面

get_pages() - 获取页面列表

get_adjacent_post() - 获取相邻文章

2. 分类和标签
get_categories() - 获取分类列表

get_tags() - 获取标签列表

get_the_category() - 获取文章分类

get_the_tags() - 获取文章标签

wp_list_categories() - 显示分类列表

3. 评论查询
get_comments() - 获取评论

wp_list_comments() - 显示评论列表

get_comment_count() - 获取评论数量

四、安全与过滤函数
1. 数据安全
esc_html() - 转义HTML内容

esc_attr() - 转义HTML属性

esc_url() - 转义URL

sanitize_text_field() - 清理文本字段

wp_kses() - 过滤允许的HTML标签

wp_kses_post() - 过滤文章内容

2. 非安全验证
wp_nonce_field() - 生成安全随机数字段

wp_verify_nonce() - 验证随机数

check_admin_referer() - 检查管理引用

五、文件与媒体函数
1. 媒体处理
wp_upload_dir() - 获取上传目录信息

media_handle_upload() - 处理文件上传

wp_get_attachment_url() - 获取附件URL

wp_get_attachment_image() - 获取附件图片

2. 文件操作
wp_handle_upload() - 处理文件上传

wp_insert_attachment() - 插入附件

wp_generate_attachment_metadata() - 生成附件元数据

六、国际化函数
__() - 翻译字符串

_e() - 输出翻译后的字符串

_x() - 带上下文的翻译

esc_html__() - 转义并翻译

load_theme_textdomain() - 加载主题翻译

七、实用工具函数
is_home() - 是否首页

is_front_page() - 是否静态首页

is_single() - 是否文章页

is_page() - 是否页面

is_category() - 是否分类页

is_tag() - 是否标签页

is_archive() - 是否存档页

is_search() - 是否搜索结果页

is_404() - 是否404页

wp_redirect() - 页面跳转

wp_enqueue_script() - 加载脚本

wp_enqueue_style() - 加载样式表

add_shortcode() - 添加短代码

do_shortcode() - 执行短代码

八、REST API 相关函数
register_rest_route() - 注册REST路由

rest_ensure_response() - 确保REST响应

rest_sanitize_value() - 清理REST值

rest_validate_value() - 验证REST值

九、缓存函数
wp_cache_get() - 获取缓存

wp_cache_set() - 设置缓存

wp_cache_delete() - 删除缓存

wp_cache_flush() - 清空所有缓存

十、调试函数
wp_die() - 输出错误信息并终止

wp_debug_backtrace_summary() - 获取调试回溯

error_log() - 记录错误日志

var_dump() - 打印变量信息

print_r() - 打印易读变量信息 -->






</div>
<?php get_footer() ?>