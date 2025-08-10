<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SakuraSea
 */
 get_header();
?>

 <div class="container">
    <br>
    <!-- 测试 -->
    <?php for($i = 1; $i <= 6; $i++):?>   
        <h<?php echo $i ?>>这是<?php echo $i ?>级标题</h<?php echo $i ?>> 
    <?php endfor ?>
 </div>



<?php 
get_footer();
?>