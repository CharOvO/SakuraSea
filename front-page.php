<?php

/**
 * The front-page for our theme
 *
 * @package SakuraSea
 * @author Char
 *测试数据
 */
$catList = array(210, 219, 220, 221, 222, 223);
$hotPosts = array(1938, 1871, 1863, 1861, 163);
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
    <!-- 分栏1 -->
    <main class="main-content front-page">
        <!-- 热门分类 -->
        <div class="category-box front-page">
            <!-- 循环遍历输出 -->
            <?php for ($i = 0; $i <= 5; $i++) : ?>
                <?php $cat = $catList[$i]; ?>
                <a href="<?php echo get_category_link($cat); ?>">
                    <div class="category-box-item front-page">
                        <span class="category-name front-page"><?php echo get_category($cat)->name; ?></span>
                        <i class="iconfont icon-right-btn-fill"></i>
                    </div>
                </a>
            <?php endfor ?>
            <!-- 查看更多分类 -->
            <div class="read-more"><a href="<?php echo esc_url(bloginfo('url') . '/category') ?>" target="_self">
                    <div class="roll-box">
                        <i class="iconfont icon-all"></i>
                        <div>查看更多</div>
                    </div>
                </a></div>
        </div>

        <!-- 热门文章列表 -->
        <!-- 标题 title -->
        <div><a id="module-title" class="hot-posts-list-title module-title" href="#" target="_self" rel="noopener"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-hot.png')) ?>" alt="热门文章">最新文章</a></div>
        <div class="post-bar front-page">
            <?php
            if (!empty($hotPosts)) {
                foreach ($hotPosts as $post_id) {
                    $post = get_post($post_id);
                    setup_postdata($post);
                    get_template_part('template-parts/posts','num');
                }
            }
            ?>
        </div>
        <!-- 最新更新列表 -->
        <!-- 标题 title -->
        <div><a id="module-title" class="new-posts-list-title module-title" href="#" target="_self" rel="noopener"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/icon-time.png')) ?>" alt="最新文章">最新文章</a></div>
        <div class="post-list front-page">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/posts');
                };
                wp_reset_postdata();
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