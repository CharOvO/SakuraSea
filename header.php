<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri().'/assets/css/custom.css') ?>">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4991188_1q0q775u33q.css">
    <script src="<?php echo(get_template_directory_uri().'/assets/js/main.js') ?>" type="module"></script>
    <title>
        <?php
            if(is_home()){
                bloginfo('name');
                echo('-');
                bloginfo('description');
            }elseif(is_single){
                the_title();
                echo('-');
                bloginfo('name');
            }
        ?>
    </title>
</head>
<body>
    <header class="header">
        <!-- 导航栏 -->
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
                <li class="hdr-nav-item sup"><a href="">小工具</a></li>
                <li class="hdr-nav-item sup"><a href="">友链</a></li>
                <li class="hdr-nav-item sup"><a href="">关于</a></li>
             

            </ul>
        </div>
       
        <!-- logo -->
        <div class="hdr-logo">
            <!-- <a href="<?php bloginfo('url') ?>"><img src="<?php echo(get_template_directory_uri().'/assets/img/logo.png') ?>" alt="logo"></a> -->
            <a href="<?php bloginfo('url') ?>"><img src="<?php echo(get_template_directory_uri().'/assets/img/logo.png') ?>" alt="logo"></a>
            <!-- <a href="<?php bloginfo('url') ?>"><i class="iconfont icon-ziyuan"></i></a> -->
            
        </div>
        <!-- menu -->
         <menu class="hdr-menu">

         </menu>
    </header>
    <div class="body-shadow"></div>

