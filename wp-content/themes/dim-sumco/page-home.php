<?php
/**
 * Home template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

/*
Template Name: Home
*/

get_header(); ?>

<main class="main clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

    <?php while ( have_posts() ) : the_post(); ?>

    <section class="c-hero c-hero--home o-section u-text-large" data-hero>

        <div class="o-section__border u-fill--white">
            <div class="o-section__border-inner">
            </div>
        </div>
        <div class="o-section__content u-fill--grey">
            <?php if ( get_field( 'hero_background') ) : ?>
                <?php $image = get_field( 'hero_background' ); ?>
                <div class="o-section__background o-cover o-background-image u-hide@mobile" style="background-image: url('<?php echo $image['sizes']['large']; ?>');" data-hero-background data-preload-image></div>
                <?php $image = get_field( 'hero_background_mobile' ); ?>
                <div class="o-section__background o-cover o-background-image u-hide@desktop" style="background-image: url('<?php echo $image['sizes']['large']; ?>');" data-hero-background data-preload-image></div>
            <?php endif; ?>
            <div class="o-section__content-inner -relative rte rte-hero rte-hero--home" data-hero-content>
                <?php the_field( 'hero' ); ?>
            </div>
        </div>

    </section>

    <?php get_template_part( 'inc/blocks' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer();
