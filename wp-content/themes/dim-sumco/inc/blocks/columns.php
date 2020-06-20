<?php
/**
 * Columns block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="o-section o-section--<?php the_sub_field( 'color' ); ?>">
	<div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
        <div class="o-section__border-inner"></div>
    </div>

    <div class="o-section__content -flush">
        <div class="c-block__columns rte" data-reveal>
            <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
                <div class="c-block__column -<?php the_sub_field( 'color' ); ?>">
                    <?php $image = get_sub_field( 'image' ); ?>

                    <?php if ( $image ) : ?>
                        <div class="c-block__image o-ratio o-ratio--3:2">
                            <div class="o-ratio__content o-background-image" style="background-image: url('<?php echo $image['sizes']['medium']; ?>');"></div>
                        </div>
                    <?php endif; ?>

                    <div class="c-block__column-inner">
                        <div class="c-block__column-content">
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

