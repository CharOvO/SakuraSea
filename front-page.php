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
<!-- 
<div class="wrapper-l white" id="todo">
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
</div> -->

<!-- 容器 -->
<div class="container front-page">
    <!-- 主要内容 -->
     <!-- 通知栏 -->
    <div class="notice-bar front-page">
        <a href="#">
            <div class="notice-bar-title">即刻</div>
            <div class="notice-bar-content">
                最近摸鱼去了😅没事慢工出细活
                <!-- <?php the_title() ?> -->
            </div>
            <i class="iconfont icon-right-btn-fill"></i>
        </a>
        
    </div>
    <main class="main-content front-page">
        <!-- 文章列表 -->
        <!-- 标题 title -->
        <a id="module-title" class="new-posts-list-title module-title" href="#" target="_self" rel="noopener"><i class="iconfont icon-time-task"></i>最新文章</a>
        <div class="post-list front-page">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/posts');
                };
            };
            ?>
        </div>
        <!-- 分页按钮 -->
        <?php
        the_posts_pagination(array(
            'mid_size' => 4,
            'prev_text' => '<i class="iconfont icon-left-double-arrow"></i>',
            'next_text' => '<i class="iconfont icon-right-double-arrow"></i>',
            'screen_reader_text' => '',
            'aria_label' => '分页导航',
        ));
        ?>
    </main>
    <?php get_sidebar() ?>

</div>

</div>
<?php get_footer() ?>