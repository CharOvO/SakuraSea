<?php

/**
 * The template for displaying single posts
 */
get_header(); // 加载头部
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        // 主循环
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('article-single'); ?>>

                <!-- 文章标题 -->
                <header class="entry-header">
                    <?php
                    the_title('<h1 class="entry-title">', '</h1>');

                    // 元信息（作者、日期、分类等）
                    if ('post' === get_post_type()) :
                    ?>
                        <div class="entry-meta">
                            <?php
                            echo get_avatar(get_the_author_meta('ID'), 32); // 作者头像
                            echo '<span class="author">' . get_the_author() . '</span>';
                            echo '<time datetime="' . get_the_date('c') . '">' . get_the_date() . '</time>';

                            // 分类目录
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<span class="cat-links">';
                                the_category(', ');
                                echo '</span>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </header>

                <!-- 特色图片 -->
                <?php if (has_post_thumbnail()) : ?>
                    <figure class="post-thumbnail">
                        <?php the_post_thumbnail('full', ['class' => 'featured-image']); ?>
                    </figure>
                <?php endif; ?>

                <!-- 文章内容 -->
                <div class="entry-content">
                    <?php
                    the_content();

                    // 分页（如果文章使用<!--nextpage-->分页）
                    wp_link_pages([
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'your-theme'),
                        'after'  => '</div>',
                    ]);
                    ?>
                </div>

                <!-- 文章标签 -->
                <?php if (has_tag()) : ?>
                    <footer class="entry-footer">
                        <div class="tags-links">
                            <?php the_tags('', ' '); ?>
                        </div>
                    </footer>
                <?php endif; ?>

                <!-- 作者信息框 -->
                <div class="author-bio">
                    <?php
                    echo get_avatar(get_the_author_meta('ID'), 96);
                    echo '<h3>' . get_the_author() . '</h3>';
                    echo '<p>' . get_the_author_meta('description') . '</p>';
                    ?>
                </div>

                <!-- 相关文章 -->
                <?php
                $related_posts = new WP_Query([
                    'posts_per_page' => 3,
                    'post__not_in'   => [get_the_ID()],
                    'category__in'   => wp_get_post_categories(get_the_ID())
                ]);

                if ($related_posts->have_posts()) :
                ?>
                    <section class="related-posts">
                        <h2><?php esc_html_e('You May Also Like', 'your-theme'); ?></h2>
                        <div class="related-grid">
                            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                <article class="related-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </section>
                <?php
                endif;
                wp_reset_postdata();
                ?>

                <!-- 评论区域 -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            </article>
        <?php
        endwhile; // 结束主循环
        ?>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer(); // 加载页脚
?>