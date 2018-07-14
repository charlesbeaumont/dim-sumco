<?php
/**
 * Hero block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="c-hero o-section u-text-xlarge">

	<div class="o-section__border u-fill--grey">
        <div class="o-section__border-inner">
            <?php echo nl2br( get_field( 'contact', 'option' ) ); ?>
        </div>
    </div>
    <div class="o-section__content u-fill--grey">
        <div class="o-section__content-inner rte-hero">
            <?php the_sub_field( 'content' ); ?>
        </div>
    </div>

</section>
