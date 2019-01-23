<?php
/**
 * Content block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="o-section o-section--<?php the_sub_field( 'color' ); ?> -spacing-xlarge c-block c-block--centered">

	<div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content">
        <div class="o-section__content-inner rte" data-reveal>
            <?php the_sub_field( 'content' ); ?>
        </div>
    </div>

</section>

