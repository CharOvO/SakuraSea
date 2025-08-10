<?php
/**
 * The footer for our theme
 *
 * This is the template that displays footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SakuraSea
 * 
 * TODO:
 * 1.copyright
 * 2.icp-box
 * 
 */   
?>
   <footer class="footer">
        <?php wp_footer() ?>
        <!-- 版权信息 -->
        <div class="copyright">©桜海云版权所有·<a href="#" taget="_block" >SakuraSea</a>主题</div>
        <!-- 备案信息 -->
        <div class="icp-box">
            <a class="icp" href="https://beian.miit.gov.cn/#/Integrated/recordQuery" target="_block"><img src="<?php echo(get_theme_file_uri().'/assets/img/icp.webp') ?>" alt="ICP备案">蜀ICP备2025146653号-1</a>
            <a class="bean" href="https://beian.mps.gov.cn/#/query/webSearch?code=51011202001113" rel="noreferrer" target="_blank"><img src="<?php echo(get_theme_file_uri().'/assets/img/bean.png') ?>" alt="公安备案">川公网安备51011202001113号</a>
        </div>
    </footer>
</body>
</html>