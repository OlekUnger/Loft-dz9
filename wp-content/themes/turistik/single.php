<?php get_header(); ?>
<!-- header_end-->
<div class="main-content">
    <div class="content-wrapper">
        <?php
        if (have_posts() ) :
        while (have_posts()) :
        the_post();
        ?>
        <div class="content">
            <div class="article-title title-page">
                <?php the_title(); ?>
            </div>
            <h3>Город вылета - <?php
                //
                $category = get_the_category();
                if ($category[1]->name) {
                    echo $category[1]->name;
                } else {
                    echo $category[0]->name;
                }

                ?></h3>
            <div class="article-image"><img src="<?php echo get_thumbnail(); ?>" alt="Image поста"></div>
            <div class="article-info">
                <div class="post-date"><?php the_time('j F Y'); ?></div>
            </div>
            <div class="article-text">
                <?php the_content(); ?>
            </div>
            <div class="article-pagination">
                <?php $prevPost = get_previous_post(true);
                if ($prevPost): ?>

                    <div class="article-pagination__block pagination-prev-left">
                        <a href="<?php echo get_permalink($prevPost->ID); ?>" class="article-pagination__link">
                            <i class="icon icon-angle-double-left"></i>Предыдущая
                            статья
                        </a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img">
                                <img src="<?php echo get_thumbnail($prevPost); ?>" class="preview-article__image">
                            </div>
                            <div class="preview-article__content">
                                <div class="preview-article__info">
                                    <a href="<?php echo get_permalink($prevPost->ID); ?>"
                                       class="post-date"><?php echo $prevPost->post_date; ?></a>
                                </div>
                                <div class="preview-article__text"><?php echo $prevPost->post_title; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $nextPost = get_next_post(true);
                if ($nextPost): ?>
                <div class="article-pagination__block pagination-prev-right">
                    <a href="<?php echo get_permalink($nextPost->ID); ?>" class="article-pagination__link">Сдедующая
                        статья
                        <i class="icon icon-angle-double-right"></i>
                    </a>
                    <div class="wrap-pagination-preview pagination-prev-right">
                        <div class="preview-article__img"><img src="<?php echo get_thumbnail($nextPost); ?>" class="preview-article__image"></div>
                        <div class="preview-article__content">
                            <div class="preview-article__info">
                                <a href="<?php echo get_permalink($nextPost->ID); ?>" class="post-date"><?php echo $nextPost->post_date; ?></a>
                            </div>
                            <div class="preview-article__text"><?php echo $nextPost->post_title; ?></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile;
    endif;
    ?>
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
