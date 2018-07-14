<?php
/**
 * Page template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'inc/blocks' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer();
