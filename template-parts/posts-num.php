<?php

/**
 * Template part for displaying posts of type num
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SakuraSea
 */
// 获取特色图片 URL，如果没有则使用默认图片
$thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
$default_thumbnail = get_template_directory_uri() . '/assets/img/logo.png'; // 默认图片路径
$final_thumbnail = $thumbnail_url ? $thumbnail_url : $default_thumbnail;
?>

<div class="post-item num">
    <a href="#" target="_self">
        <div class="post-cover num">
            <img src="<?php echo esc_url($final_thumbnail) ?>" alt="<?php echo get_the_title() ?>" width="100%" height="auto">
            <div class="post-shadow num"></div>
        </div>
        <div class="post-details num">
            <div class="post-number num"></div>
            <div class="post-title num">
                <?php echo esc_html(get_the_title()) ?>
            </div>
            <div class="post-tag num">
                <?php if(has_tag()): the_tags('', ' ') ?>
                <?php else: echo("忘设标签了T_T")?>
                <?php endif ?>
            </div>
        </div>
    </a>
</div>