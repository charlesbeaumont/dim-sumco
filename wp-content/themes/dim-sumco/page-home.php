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

        <div class="o-section__border u-fill--grey">
            <div class="o-section__border-inner">
            </div>
        </div>
        <div class="o-section__content u-fill--grey">
            <div class="o-section__content-inner rte rte-hero rte-hero--home" data-hero-content>
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
            <div class="o-section__content-inner">
                <h2 class="u-text-small u-margin-bottom-huge u-color--grey u-text-weight-regular" data-reveal>current situation in Amsterdam - <span class="u-color--yellow" data-time></span></h2>

                <p class="u-h2" data-reveal>working on: <span class="u-text-weight-regular">Consumer research for Nike.</span></p>
                <p class="u-h2" data-reveal>listening to: <span class="u-text-weight-regular">Marvin Gaye - Motown Unreleased 1965.</span></p>
                <p class="u-h2" data-reveal>watching: <span class="u-text-weight-regular">Billions.</span></p>
                <p class="u-h2" data-reveal>reading: <span class="u-text-weight-regular">Zadie Smith.</span></p>
            </div>
        </div>

    </section>

    <?php get_template_part( 'inc/journal' ); ?>

    <?php get_template_part( 'inc/newsletter' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer();