<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SakuraSea
 * 测试数据
 */
$bgList = array('01', '02', '03', '07', '10', '13', '14')
?>
<aside>
    <div class="sidebar">
        <?php foreach ($bgList as $index => $id) : ?>
            <button onclick="
                document.getElementById('video-bg-source').src = '<?php echo(get_theme_file_uri()."/assets/video/Bg-Video-{$id}.webm")  ?>';
                document.getElementsByClassName('site-bg')[0].load();
            "><?php echo $index ?></button>
        <?php endforeach; ?>
    </div>
</aside>