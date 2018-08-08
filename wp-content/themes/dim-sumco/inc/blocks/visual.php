<?php
/**
 * Visual block template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<section class="c-block c-block--visual o-section -spacing-xlarge">

	<div class="o-section__border">

    </div>

    <div class="o-section__content">
        <div class="o-section__content-inner" data-reveal>
            <?php $image = get_sub_field( 'visual' ); ?>
            <img src="<?php echo $image['sizes']['large']; ?>">
        </div>
    </div>

</section>
