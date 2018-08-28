<?php
/**
 * Hero block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="c-hero o-section o-section--<?php the_sub_field( 'color' ); ?> u-text-xlarge" data-hero>

	<div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
        <div class="o-section__border-inner">
        </div>
    </div>
    <div class="o-section__content">
        <div class="o-section__content-inner rte-hero" data-hero-content>
            <?php the_sub_field( 'content' ); ?>
        </div>
    </div>

</section>
