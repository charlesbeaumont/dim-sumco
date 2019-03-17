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
            <div class="c-footer o-grid rte">
                <div class="o-grid__cell u-6/12@tablet">
                    <div class="c-footer__content">
                        <?php the_field( 'footer', 'option' ); ?>
                    </div>
                </div>
                <div class="o-grid__cell u-2/12@tablet">
                    <a href="https://www.linkedin.com/company/dimsumstrategy" target="_blank" class="u-margin-right">LinkedIn</a>
                    <a href="https://www.instagram.com/dimsumstrategy/" target="_blank">Instagram</a>
                </div>
                <div class="o-grid__cell u-4/12@tablet">
                    <p class="c-footer__copyright">&copy;2019 dim-sum All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php wp_footer(); ?>

</body>

</html>
