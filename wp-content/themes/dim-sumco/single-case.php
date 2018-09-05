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

    <section class="c-hero o-section u-text-xlarge" data-hero>

        <div class="o-section__border -white-logo u-fill--yellow u-color--white">
            <div class="o-section__border-inner">
            </div>
        </div>

        <?php $image = get_field( 'case_background' ); ?>
        <?php if ( get_field( 'case_video' ) ) : ?>
            <div class="o-section__content -flush u-fill--grey">
                <video class="o-video c-post-grid__video" autoplay playsinline muted loop data-hero-background data-video>
                    <source src="<?php the_field( 'case_video' ); ?>" type="video/mp4">
                </video>
            </div>
        <?php else : ?>
            <div class="o-section__content u-fill--grey">
                <div class="o-cover o-background-image" style="background-image: url('<?php echo $image['sizes']['large']; ?>');" data-hero-background data-preload-image></div>
            </div>
        <?php endif; ?>

        <a href="<?php echo get_post_type_archive_link( 'case' ); ?>" class="c-hero__back"></a>

    </section>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'inc/blocks' ); ?>

    <?php endwhile; ?>

    <?php get_template_part( 'inc/work' ); ?>

    <?php get_template_part( 'inc/newsletter' ); ?>

</main>

<?php get_footer();
