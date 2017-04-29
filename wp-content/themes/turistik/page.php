<?php get_header(); ?>
<div class="main-content">
    <div class="content-wrapper">
        <?php
        if (have_posts()) :
        while (have_posts()) :
        the_post();
        ?>
        <div class="content">
            <h1 class="title-page"><?php the_title(); ?></h1>
            <p><img src="<?php echo get_thumbnail(); ?>" alt="Image" class="alignleft">Например, рейсы с
                пересадками стоят дешевле, чем прямые рейсы. Однако, в отдельных случаях пересадка может длиться
                не час-два, а все 11 часов или даже сутки. То есть, вам придется дополнительный день провести в
                промежуточном аэропорту, а это очень вымотает. Следите, чтобы пересадка была не слишком
                короткой, но и не очень длинной, оптимально 2-3 часа.</p>
            <ol>
                <?php the_content(); ?>
            </ol>
            <div class="page-navigation">
                <?php $prevPost = get_previous_post(true);
                if ($prevPost): ?>
                    <div class="page-navigation-wrap">
                        <a href="<?php echo get_permalink($nextPost->ID); ?>" class="page-navigation__prev-page">
                            <i class="icon icon-angle-double-left"></i>
                            Предыдущая статья</a>
                    </div>
                <?php endif; ?>
                <?php $nextPost = get_previous_post(true);
                if ($prevPost): ?>
                <div class="page-navigation-wrap">
                    <a href="<?php echo get_permalink($nextPost->ID); ?>" class="page-navigation__next-page">Следующая
                        статья
                        <i class="icon icon-angle-double-right"></i>
                    </a>
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
