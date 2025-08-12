<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SakuraSea
 */
?>
<!-- 头部 -->
<header class="post-header">
    <hgroup class="post-info">
        <h1><?php the_title() ?></h1>
        <!-- 分类列表 -->
        <ul class="post-category">
            <i class="iconfont icon-all"></i>
            <?php the_category(' ') ?>
        </ul>
        <!-- 标签列表 -->
        <ul class="post-tags">
            <i class="iconfont icon-file-common"></i>
            <?php the_tags('', ' ') ?>
        </ul>
        <!-- 元数据 -->
        <ul class="post-meta">
            <li class="meta-author"><?php the_author_posts_link() ?></li>
            <li class="meta-time"><time datetime="<?php echo esc_html(get_the_date('c')) ?>"><?php skr_the_time() ?></time></li>
            <!-- 热度 -->
        </ul>
        <!-- 分享 -->
        <button id="share-btn" class="meta-button share" title="分享这篇文章"><i class="iconfont icon-fenxiang"></i></button>
    </hgroup>
</header>
<!-- 内容 -->
<div class="wrapper entry-layout">
        <!-- 文章 -->
        <article id="<?php the_ID()?>" <?php post_class()?>>
            <div class="entry-content">
                <?php the_content() ?>
            </div>
        </article> 
        <!-- 相关信息 -->
        <!-- 评论 -->
</div>

