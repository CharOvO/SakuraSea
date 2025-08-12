<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SakuraSea
 */

use function PHPSTORM_META\type;

 get_header();
?>

<main class="container">
    <!-- 文章内容 -->
    <?php while(have_posts()) {
        the_post();
        get_template_part('template-parts/content');
    }
    ?>

</main>

 <br>


<?php 
get_footer();
?>