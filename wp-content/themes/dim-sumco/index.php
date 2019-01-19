<?php
/**
 * Posts page template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<section class="o-section -spacing-none">

<div class="o-section__border u-fill--grey">
    <div class="o-section__border-inner"></div>
</div>
<div class="o-section__content">
    <div class="o-section__content-inner -large">
        <h2 class="o-section__title u-text-small u-margin-top-large@mobile u-color--grey u-text-weight-regular" data-reveal>latest from our journal</h2>
    </div>

    <div class="c-post-grid">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="c-post-grid__entry" data-reveal>
            <?php if ( get_field( 'post_thumbnail_video' ) ) : ?>
                <a href="<?php the_permalink(); ?>" class="c-post-grid__featured o-background-image">
                    <div class="c-post-grid__video-container" data-video>
                        <video class="o-video c-post-grid__video" autoplay playsinline muted loop>
                            <source src="<?php the_field( 'post_thumbnail_video' ); ?>" type="video/mp4">
                        </video>
                    </div>
                </a>
            <?php else : ?>
                <a href="<?php the_permalink(); ?>" class="c-post-grid__featured o-background-image" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"></a>
            <?php endif; ?>
            <div class="c-post-grid__title rte">
                <div class="u-color--yellow"><?php the_title(); ?></div>
                <a href="<?php the_permalink(); ?>" class="u-text-weight-regular">Read more</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

</section>

<?php get_footer();
