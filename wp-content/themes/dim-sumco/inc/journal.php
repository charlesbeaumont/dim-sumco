<section class="o-section -spacing-none">

    <div class="o-section__border u-fill--grey">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content">
        <div class="o-section__content-inner -large">
            <h2 class="u-margin-top-large u-color--grey">latest from our journal</h2>

            <div class="c-post-grid">
                <?php
                $entries = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9999
                ));
                ?>

                <?php while ( $entries->have_posts() ) : $entries->the_post(); ?>
                <div class="c-post-grid__entry">
                    <a href="<?php the_permalink(); ?>" class="c-post-grid__featured o-background-image" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"></a>
                    <div class="c-post-grid__title">
                        <div class="u-color--yellow"><?php the_title(); ?></div>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</section>
