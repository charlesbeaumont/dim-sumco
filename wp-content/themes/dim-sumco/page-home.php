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

    <?php get_template_part( 'inc/work' ); ?>

    <section class="o-section -spacing-xlarge -fill-height">

        <div class="o-section__border">
            <div class="o-section__border-inner"></div>
        </div>
        <div class="o-section__content u-fill--grey">
            <div class="o-section__content-inner rte">
                <h2 class="o-section__title u-text-small u-margin-bottom-huge u-color--grey u-text-weight-regular" data-reveal>currently in Amsterdam - <span class="u-color--yellow" data-time></span></h2>

                <div class="u-h2" data-reveal>
                    Working on:
                    <div class="c-current__content" style="display: inline-block;"><?php the_field( 'working_on' ); ?></div>
                </div>
                <div class="u-h2" data-reveal>
                    Listening to:
                    <div class="c-current__content" style="display: inline-block;"><?php the_field( 'listening_to' ); ?></div>
                </div>
                <div class="u-h2" data-reveal>
                    Watching:
                    <div class="c-current__content" style="display: inline-block;"><?php the_field( 'watching' ); ?></div>
                </div>
                <div class="u-h2" data-reveal>
                    Reading:
                    <div class="c-current__content" style="display: inline-block;"><?php the_field( 'reading' ); ?></div>
                </div>
            </div>
        </div>

    </section>

    <?php get_template_part( 'inc/journal' ); ?>

    <?php get_template_part( 'inc/newsletter' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer();
