<?php get_header() ?>
<!-- 文章列表 -->


<div class="posts-list">
    
        
        
<?php 
    while(have_posts()){
        the_post();
        echo('<div class="post-item">');
            echo('<div class="post-meta">');
            the_title('<div class="post-title">','</div>');
            the_excerpt('<div class="post-description">','</div>');
            the_time('Y-m-d','<div class="meta-time">','</div>');
            echo('<div class="meta-author">'.get_the_author().'</div>');    
            // echo('<a href="'.the_permalink().'" class="read-more"><i class="iconfont icon-view-fill"></i></a>');
            echo('</div>');

        echo('</div>');
    }
?>

 
            
            
               
    

</div>
<?php get_footer() ?>