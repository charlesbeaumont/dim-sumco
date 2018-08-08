<?php
/**
 * Hero block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="c-hero o-section u-text-xlarge" data-hero>

	<div class="o-section__border u-fill--grey">
        <div class="o-section__border-inner">
        </div>
    </div>
    <div class="o-section__content u-fill--grey">
        <div class="o-section__content-inner rte-hero" data-hero-content>
            <?php the_sub_field( 'content' ); ?>
        </div>
    </div>

</section>
