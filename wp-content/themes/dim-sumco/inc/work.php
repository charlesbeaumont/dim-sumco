<section class="o-section -spacing-xlarge">

    <div class="o-section__border u-fill--yellow">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="c-work-grid__wrapper o-section__content">
        <div class="c-work-grid__container o-section__content-inner -large">
            <h2 class="c-work-grid__heading u-color--grey">work</h2>

            <div class="c-work-grid" data-work-grid>
                <div class="c-work-grid__background o-background-image -contain" data-work-grid-background></div>
                <?php
                $entries = new WP_Query(array(
                    'post_type' => 'case',
                    'posts_per_page' => 9999
                ));
                ?>

                <?php while ( $entries->have_posts() ) : $entries->the_post(); ?>
                <?php $image = get_field( 'case_background' ); ?>
                <div class="c-work-grid__entry">
                    <a href="<?php the_permalink(); ?>" class="c-work-grid__link" data-work-grid-thumbnail="<?php echo $image['sizes']['large']; ?>">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="c-work-grid__logo">
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</section>
