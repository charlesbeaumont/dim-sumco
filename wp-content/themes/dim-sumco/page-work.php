<?php
/**
 * Home template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

/*
Template Name: Work
*/

get_header(); ?>

<main class="main clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'inc/blocks' ); ?>

<?php endwhile; ?>

<section class="o-section -spacing-xlarge" style="min-height: calc(100vh - 9.8rem);">

    <div class="o-section__border u-fill--grey">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="c-work-grid__wrapper o-section__content">
        <h2 class="o-section__title u-text-small u-color--grey u-text-weight-regular" data-reveal><?php _e( 'selected work', 'dim-sumco' ); ?></h2>
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
            <div class="c-work-grid__entry" data-reveal>
                <a href="<?php the_permalink(); ?>" class="c-work-grid__link" data-work-grid-thumbnail="<?php echo $image['sizes']['medium']; ?>" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');">
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

</section>

</main>

<?php get_footer();
