<?php
/**
 * Custom post type archive template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<section class="o-section -spacing-xlarge">

<div class="o-section__border -white-logo u-fill--yellow">
    <div class="o-section__border-inner"></div>
</div>
<div class="c-work-grid__wrapper o-section__content">
    <h2 class="o-section__title u-text-small u-color--grey u-text-weight-regular" data-reveal>work</h2>
    <div class="c-work-grid" data-work-grid>
        <div class="c-work-grid__background o-background-image -contain" data-work-grid-background></div>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php $image = get_field( 'case_background' ); ?>
        <div class="c-work-grid__entry" data-reveal>
            <a href="<?php the_permalink(); ?>" class="c-work-grid__link" data-work-grid-thumbnail="<?php echo $image['sizes']['large']; ?>" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');">
            </a>
        </div>
        <?php endwhile; ?>
    </div>
</div>

</section>

<?php get_footer();
