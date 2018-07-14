<?php
/**
 * Page blocks template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

<?php if ( have_rows( 'blocks' ) ) : ?>

    <?php while ( have_rows( 'blocks' ) ) : the_row(); ?>

        <?php get_template_part( 'inc/blocks/' . get_row_layout() ); ?>

    <?php endwhile; ?>

<?php endif; ?>
