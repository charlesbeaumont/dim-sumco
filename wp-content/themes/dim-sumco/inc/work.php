<section class="o-section -spacing-xlarge">

    <div class="o-section__border u-fill--yellow">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="c-work-grid__wrapper o-section__content">
        <div class="c-work-grid__background o-background-image -contain"></div>
        <div class="o-section__content-inner -large">
            <h2 class="u-color--grey">work</h2>

            <div class="c-work-grid">
                <?php
                $entries = new WP_Query(array(
                    'post_type' => 'case',
                    'posts_per_page' => 9999
                ));
                ?>

                <?php while ( $entries->have_posts() ) : $entries->the_post(); ?>
                <div class="c-work-grid__entry">
                    <a href="<?php the_permalink(); ?>" class="c-work-grid__link">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="c-work-grid__logo">
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</section>
