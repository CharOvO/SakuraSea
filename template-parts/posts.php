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

<div <?php post_class('post-item list'); ?>>
    <div class="post-cover list">
        <img src="<?php echo esc_url($final_thumbnail); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
        <div class="cover-shadow list"></div>
    </div>

    <div class="post-meta list">
        <div class="post-title list">『
            <?php 
                if(mb_strlen(get_the_title()) <= 25){
                    the_title();
                } else {
                   echo esc_html(wp_trim_words(get_the_title(),25));
                }
            ?>』</div>
        <!-- <div class="post-description"><?php the_excerpt(); ?></div> -->
        <div class="post-meta-info list">
            <time class="meta-time list" datetime="<?php echo get_the_date('c'); ?>"><i class="iconfont icon-calendar"></i><?php skr_the_time('Y-m-d'); ?></time>
            <div class="h-line list"></div>
            <div class="meta-author list"><i class="iconfont icon-user"></i><?php the_author(); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-details list" aria-label="查看详细"><i class="iconfont icon-view-fill"></i></a>
        </div>

    </div>
</div>