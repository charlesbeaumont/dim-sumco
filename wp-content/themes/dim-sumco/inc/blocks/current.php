<section class="o-section -spacing-huge">

    <div class="o-section__border">
        <div class="o-section__border-inner"></div>
    </div>
    <div class="o-section__content u-fill--grey">
        <div class="o-section__content-inner rte">
            <h2 class="o-section__title u-text-small u-margin-bottom-huge u-color--grey" data-reveal><span class="c-current__header"><?php _e( 'Currently in Amsterdam', 'dim-sumco' ); ?></span> <span class="u-hide@mobile">-</span> <span class="u-color--yellow" data-time></span></h2>

            <div class="c-current__block" data-reveal>
                <?php _e( 'Working on', 'dim-sumco' ); ?>:
                <div class="c-current__content"><?php the_field( 'working_on' ); ?></div>
            </div>
            <div class="c-current__block" data-reveal>
                <?php _e( 'Listening to', 'dim-sumco' ); ?>:
                <div class="c-current__content"><?php the_field( 'listening_to' ); ?></div>
            </div>
            <div class="c-current__block" data-reveal>
                <?php _e( 'Watching', 'dim-sumco' ); ?>:
                <div class="c-current__content"><?php the_field( 'watching' ); ?></div>
            </div>
            <div class="c-current__block" data-reveal>
                <?php _e( 'Reading', 'dim-sumco' ); ?>:
                <div class="c-current__content"><?php the_field( 'reading' ); ?></div>
            </div>
        </div>
    </div>

</section>
