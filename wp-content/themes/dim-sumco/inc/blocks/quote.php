<?php
/**
 * Content block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="o-section -spacing-xlarge c-block c-block--content">

	<div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content u-fill--<?php the_sub_field( 'color' ); ?>">
        <div class="o-section__content-inner rte" data-reveal>
            <blockquote class="u-h2 c-blockquote">
                <p><?php the_sub_field( 'quote' ); ?></p>

                <?php if ( get_sub_field( 'subtext' ) ) : ?>
                    <p class="u-text-medium u-text-weight-regular"><?php the_sub_field( 'subtext' ); ?></p>
                <?php endif; ?>
            </blockquote>
        </div>
    </div>

</section>

