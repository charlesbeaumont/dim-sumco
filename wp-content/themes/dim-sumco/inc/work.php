<section class="o-section -spacing-xlarge -fill-height">

    <div class="o-section__border -white-logo u-fill--yellow">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="c-work-grid__wrapper o-section__content">
        <div class="c-work-grid__container o-section__content-inner -large">
            <h2 class="u-text-small c-work-grid__heading u-color--grey u-text-weight-regular" data-reveal>work</h2>
        </div>
        <div class="c-work-grid" data-work-grid>
            <div class="c-work-grid__background o-background-image -contain" data-work-grid-background></div>
            <?php
            $entries = new WP_Query(array(
                'post_type' => 'case',
                'posts_per_page' => 6
            ));
            ?>

            <?php while ( $entries->have_posts() ) : $entries->the_post(); ?>
            <?php $image = get_field( 'case_background' ); ?>
            <div class="c-work-grid__entry" data-reveal>
                <a href="<?php the_permalink(); ?>" class="c-work-grid__link" data-work-grid-thumbnail="<?php echo $image['sizes']['large']; ?>" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');">
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

</section>
