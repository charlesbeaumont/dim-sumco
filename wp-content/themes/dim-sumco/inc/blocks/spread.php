<?php
/**
 * Visual block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="c-block c-block--spread o-section o-section--<?php the_sub_field( 'color' ); ?>">

	<div class="o-section__border <?php if ( get_sub_field( 'color' ) == 'yellow-grey' || get_sub_field( 'color' ) == 'yellow-white') : ?>-white-logo<?php endif; ?>">

    </div>

    <?php $image = get_sub_field( 'spread' ); ?>
    <div class="o-section__content -flush" data-reveal>
        <img src="<?php echo $image['sizes']['large']; ?>">
    </div>

</section>
