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
                    <div class="c-block__column-inner">
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

