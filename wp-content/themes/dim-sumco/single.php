<?php
/**
 * Single post template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header();
?>

<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php
        $author_id = get_the_author_meta('ID');
        $author_avatar = get_field('avatar', 'user_'. $author_id );
        ?>

        <section class="c-hero c-hero--single o-section u-text-large" data-hero>
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
            </div>
        </section>

        <section class="o-section o-section--yellow-white -spacing-xlarge c-block c-block--centered">
            <div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
                <div class="o-section__border-inner"></div>
            </div>
            <div class="o-section__content u-padding-bottom-none">
                <div class="o-section__content-inner rte" data-reveal>
                    <p class="c-post-header__category">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo $categories[0]->name;
                        }
                        ?>
                    </p>

                    <h1 class="c-post-header__title"><?php the_title(); ?></h1>

                    <div class="c-post-header__author">
                        <div class="c-post-header__avatar o-background-image" style="background-image: url('<?php echo $author_avatar['sizes']['thumbnail'] ?>');"></div>
                        By <?php echo get_the_author_meta( 'display_name' ); ?>
                        - <?php echo get_the_date( 'F j, Y' ); ?>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part( 'inc/blocks' ); ?>

        <section class="o-section o-section--yellow-white -spacing-xlarge c-block c-block--centered">
            <div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
                <div class="o-section__border-inner"></div>
            </div>
            <div class="o-section__content u-padding-bottom-large u-padding-top-none">
                <div class="o-section__content-inner rte" data-reveal>
                    <div class="c-post-header__author">
                        <div class="c-post-header__avatar o-background-image" style="background-image: url('<?php echo $author_avatar['sizes']['thumbnail'] ?>');"></div>
                        By <?php echo get_the_author_meta( 'display_name' ); ?>
                        - <?php echo get_the_date( 'F j, Y' ); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <?php get_template_part( 'inc/journal' ); ?>

</main>

<?php get_footer();
