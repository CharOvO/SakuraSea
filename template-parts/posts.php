<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SakuraSea
 */
?>

<?php
// 获取特色图片 URL，如果没有则使用默认图片
$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$default_thumbnail = get_template_directory_uri() . '/assets/img/logo.png'; // 默认图片路径
$final_thumbnail = $thumbnail_url ? $thumbnail_url : $default_thumbnail;
?>

<div <?php post_class('post-item'); ?>>
    <div class="post-cover">
        <img src="<?php echo esc_url($final_thumbnail); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
        <div class="cover-shadow"></div>
    </div>

    <div class="post-meta">
        <div class="post-title">『<?php the_title(); ?>』</div>
        <!-- <div class="post-description"><?php the_excerpt(); ?></div> -->
        <div class="post-meta-info">
            <time class="meta-time" datetime="<?php echo get_the_date('c'); ?>"><i class="iconfont icon-calendar"></i><?php the_time('Y-m-d'); ?></time>
            <div class="h-line"></div>
            <div class="meta-author"><i class="iconfont icon-user"></i><?php the_author(); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-details" aria-label="查看详细"><i class="iconfont icon-view-fill"></i></a>
        </div>

    </div>
</div>