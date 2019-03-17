<section class="o-section -spacing-huge">

    <div class="o-section__border -white-logo u-fill--yellow">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="c-work-grid__wrapper o-section__content">
        <h2 class="o-section__title u-text-small u-color--grey" data-reveal>Selected work</h2>
        <div class="c-work-grid" data-work-grid>
            <div class="c-work-grid__background o-background-image -contain" data-work-grid-background></div>
            <?php
            $entries = new WP_Query(array(
                'post_type' => 'case',
                'posts_per_page' => 6
            ));
            ?>

            <?php while ( $entries->have_posts() ) : $entries->the_post(); ?>
            <div class="c-work-grid__entry" data-reveal>
                <?php
                if ( get_field( 'case_hover_image' ) ) :
                    $image = get_field( 'case_hover_image' );
                else :
                    $image = get_field( 'case_background' );
                endif;
                ?>
                <a href="<?php the_permalink(); ?>" class="c-work-grid__link" data-work-grid-thumbnail="<?php echo $image['sizes']['medium']; ?>" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');">
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

</section>
