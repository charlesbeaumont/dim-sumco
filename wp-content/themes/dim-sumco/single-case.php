<?php
/**
 * Single custom post template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

    <section class="c-hero o-section u-text-xlarge">

        <div class="o-section__border u-fill--yellow u-color--white">
            <div class="o-section__border-inner">
            </div>
        </div>
        <?php $image = get_field( 'case_background' ); ?>
        <div class="o-section__content u-fill--grey o-background-image" style="background-image: url('<?php echo $image['sizes']['large']; ?>');">
            <div class="o-section__content-inner rte-hero">
                <?php the_sub_field( 'content' ); ?>
            </div>
        </div>

    </section>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'inc/blocks' ); ?>

    <?php endwhile; ?>

    <?php get_template_part( 'inc/work' ); ?>

    <?php get_template_part( 'inc/newsletter' ); ?>

</main>

<?php get_footer();
