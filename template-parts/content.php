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
<header class="post-header single">
    <hgroup class="post-info single">
        <h1 class="post-title single"><?php the_title() ?></h1>
        <!-- 分类列表 -->
        <ul class="post-categories single">
            <i class="iconfont icon-all"></i>
            <?php the_category(' ') ?>
        </ul>
        <!-- 标签列表 -->
        <ul class="post-tags single">
            <i class="iconfont icon-file-common"></i>
            <?php the_tags('', ' ') ?>
        </ul>
        <!-- 元数据 -->
        <div class="post-meta-box single">
            <ul class="post-meta single">
                <li class="meta-author single"><?php the_author_posts_link() ?></li>
                <li class="meta-time single"><time datetime="<?php echo esc_html(get_the_date('c')) ?>"><?php skr_the_time() ?></time></li>
            </ul>
            <!-- 字数/热度/阅读时间 -->
            <!-- 分享 -->
        <button id="share-btn" class="meta-button share single" title="分享这篇文章"><i class="iconfont icon-fenxiang"></i></button>
        </div>
        
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

