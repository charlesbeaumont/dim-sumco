<?php
/**
 * 404 template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

    <section class="o-section o-section--yellow-white -spacing-xlarge c-block c-block--content">

    <div class="o-section__border -white-logo">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content">
        <div class="o-section__content-inner rte" data-reveal>
            <h1><?php esc_html_e( 'Epic 404 - Article Not Found', 'dim-sumco' ); ?></h1>

            <p><?php esc_html_e( 'The article you were looking for was not found, but maybe try looking again!', 'dim-sumco' ); ?></p>
        </div>
    </div>

    </section>

</main>

<?php get_footer();
