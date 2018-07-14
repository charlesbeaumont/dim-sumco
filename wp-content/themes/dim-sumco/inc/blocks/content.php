<?php
/**
 * Content block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="o-section o-section--<?php the_sub_field( 'color' ); ?> -spacing-xlarge c-block c-block--content">

	<div class="o-section__border">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content">
        <div class="o-section__content-inner">
            <?php the_sub_field( 'content' ); ?>
        </div>
    </div>

</section>

