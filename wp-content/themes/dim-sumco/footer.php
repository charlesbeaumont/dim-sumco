<?php
/**
 * Footer template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?>

	<div class="o-section">
        <div class="o-section__border -white-logo u-fill--yellow">

        </div>
        <div class="o-section__content u-fill--white">
            <div class="c-footer">
                <div class="c-footer__content">
                    <?php the_field( 'footer', 'option' ); ?>
                </div>
                <p class="c-footer__copyright">&copy;2018 dim-sum All right reserved.</p>
            </div>
        </div>
    </div>

</div>

<?php wp_footer(); ?>

</body>

</html>
