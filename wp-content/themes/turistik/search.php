<?php get_header(); ?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page">Результат поиска</h1>
                <h2><?php $allsearch = new WP_Query("s=$s&showposts=-1");
                    $key = wp_specialchars_decode($s, 1);
                    $count = $allsearch->post_count;
                    _e('');
                    echo $count . ' ';
                    _e('результатов ');
                    wp_reset_query(); ?>
                    <span> для <?php echo get_search_query(); ?></span></h2>
                <div class="posts-list">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="post-wrap">
                                <div class="post-thumbnail"><img
                                            src="<?php echo get_thumbnail(); ?>"
                                            alt="Image поста" class="post-thumbnail__image"></div>
                                <div class="post-content">
                                    <div class="post-content__post-info">
                                        <div class="post-date"><?php echo $post->post_date; ?></div>
                                    </div>
                                    <div class="post-content__post-text">
                                        <div class="post-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <div class="post-content__post-control"><a href="<?php the_permalink(); ?>"
                                                                               class="btn-read-post">Читать
                                            далее
                                            >></a></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?><h2> Ничего не найдено</h2>
                    <?php endif; ?>

                </div>
                <div class="pagenavi-post-wrap">
                    <?php wp_pagenavi(); ?>
                </div>
                <!-- sidebar-->


            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer();