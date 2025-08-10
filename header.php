<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SakuraSea
 * 
 * TODO:
 * 1.menu
 * 
 */


?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Char">
    <?php if(bloginfo('description')): ?>
            <meta name="description" content="<?php bloginfo('description') ?>">
    <?php endif ?>
    <?php wp_head() ?>
    <title>
        <?php
        if (is_home() || is_front_page()) {
            bloginfo('name');
            if (bloginfo('description')) {
                echo (' - ');
                bloginfo('description');
            }
        } elseif (is_single() || is_page()) {
            the_title();
            echo (' - ');
            bloginfo('name');
        } elseif (is_tag() || is_tax()) {
            single_term_title();
            echo (' - ');
            bloginfo('nam');
        } elseif (is_author()) {
            echo (get_the_author() . '的个人主页');
        }
        ?>
    </title>
</head>

<body>
    
    <!-- 背景 -->
     <?php if(/*! is_single()*/ true): ?>
        <video autoplay muted loop playsinline id="bg-video">
            <!-- <source src="<?php echo (get_template_directory_uri() . '/assets/video/bg-video-01.mp4') ?>" type="video/mp4"> -->
            <source src="https://cdn.sakura-sea.cn/video/bg/Bg-Video-01.webm" type="video/mp4">
        </video>
    <?php endif ?>
    

    <header class="header">
        <!-- 导航栏 -->

        <!-- 动态生成 -->
        <?php
        wp_nav_menu(array(
            'container'            => 'div',
            'container_class'      => 'hdr-nav',
            'menu_class'           => 'hdr-nav-ul sup',
            'echo'                 => true,
            'fallback_cb'          => false,
            'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
            'depth'                => 3,
            'theme_location'       => 'primary',
        ));
        ?>


        <!-- 静态生产 -->
        <div class="hdr-nav">
            <ul class="hdr-nav-ul sup">
                <li class="hdr-nav-item sup">
                    <span>开始浏览</span>
                    <!-- 二级菜单 -->

                    <ul class="hdr-nav-ul sub">
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-template"></i>专题</a>
                            <!-- 三级菜单 -->
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">HTML</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">CSS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">JS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>
                        <!--  -->
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-all"></i>分类</a>
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">文档</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">笔记</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">主题</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>

                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-lable"></i>标签</a>
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">Python</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">美化</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">WordPress</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-one-stop-service"></i>归档</a>
                        </li>
                    </ul>
                </li>
                <li class="hdr-nav-item sup">
                    <a href="">我的小窝</a>
                    <ul class="hdr-nav-ul sub">
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-template"></i>专题</a>
                            <!-- 三级菜单 -->
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">HTML</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">CSS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">JS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>
                        <!--  -->
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-all"></i>分类</a>
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">文档</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">笔记</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">主题</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="hdr-nav-item sup">
                    <a href="">小工具</a>
                    <ul class="hdr-nav-ul sub">
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-template"></i>专题</a>
                            <!-- 三级菜单 -->
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">HTML</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">CSS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">JS</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>
                        <!--  -->
                        <li class="hdr-nav-item sub">
                            <a href="#"><i class="iconfont icon-all"></i>分类</a>
                            <ul class="hdr-nav-ul sub-sub">
                                <li class="hdr-nav-item sub-sub"><a href="#">文档</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">笔记</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">主题</a></li>
                                <li class="hdr-nav-item sub-sub"><a href="#">...</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="hdr-nav-item sup"><a href="">友链</a></li>
                <li class="hdr-nav-item sup"><a href="">关于</a></li>


            </ul>
        </div>

        <!-- logo -->
        <div class="hdr-logo">
            <a href="<?php bloginfo('url') ?>"><i class="iconfont icon-home-filling"></i><img src="<?php echo (get_template_directory_uri() . '/assets/img/logo.png') ?>" alt="logo"></a>
            <!-- <a href="<?php bloginfo('url') ?>"><i class="iconfont icon-ziyuan"></i></a> -->

        </div>
        <!-- menu -->
        <menu class="hdr-menu">
            <?php 
                wp_nav_menu(array(
                'container'            => 'div',
                'container_class'      => 'user-menu',
                'menu_class'           => 'user-menu-ul sup',
                'echo'                 => true,
                'fallback_cb'          => false,
                // 'before'               => '',
                // 'after'                => '',
                'link_before'          => '<i ></i>',
                // 'link_after'           => '',
                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'         => 'preserve',
                'depth'                => 3,
                // 'walker'               => '',
                'theme_location'       => 'user',
                ));
            ?>
        </menu>
    </header>
    <!-- 菜单背景 -->
    <div class="body-shadow"></div>