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

    <section class="c-hero c-hero--home o-section u-text-large">

        <div class="o-section__border u-fill--grey">
            <div class="o-section__border-inner">
            </div>
        </div>
        <div class="o-section__content u-fill--grey">
            <div class="o-section__content-inner rte-hero rte-hero--home">
                <?php the_field( 'hero' ); ?>
            </div>
        </div>

    </section>

    <?php get_template_part( 'inc/work' ); ?>

    <section class="o-section -spacing-xlarge">

        <div class="o-section__border">
            <div class="o-section__border-inner"></div>
        </div>
        <div class="o-section__content u-fill--grey">
            <div class="o-section__content-inner">
                <h2 class="u-margin-bottom-none u-color--grey">current situation in Amsterdam</h2>
                <p class="u-margin-bottom-huge" data-time></p>

                <p class="u-h2"><span class="u-color--yellow">working on:</span> Consumer research for Nike.</p>
                <p class="u-h2"><span class="u-color--yellow">listening to:</span> Marvin Gaye - Motown Unreleased 1965.</p>
                <p class="u-h2"><span class="u-color--yellow">watching:</span> Billions.</.p>
                <p class="u-h2"><span class="u-color--yellow">reading:</span> Zadie Smith.</.p>
            </div>
        </div>

    </section>

    <?php get_template_part( 'inc/journal' ); ?>

    <?php get_template_part( 'inc/newsletter' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer();
