<?php
/**
 * Sabi shortcodes.
 *
 * @category function library
 * @package dim-sumco
 * @author Lille Hummer
 */

add_action( 'init', 'hummer_register_shortcodes' );
function hummer_register_shortcodes() {
	add_shortcode( 'button', 'hummer_shortcode_button' );
	add_shortcode( 'icon', 'hummer_shortcode_icon' );
}

function hummer_shortcode_button ( $atts, $content, $shortcode_tag ) {
	$a = shortcode_atts( array(
        'url' => 'http://',
    ), $atts );

	return '<a href="' . $a['url'] . '" class="c-button">' . do_shortcode( $content ) . '</a>';
}

function hummer_shortcode_icon ( $atts, $content, $shortcode_tag ) {
	$a = shortcode_atts( array(
        'url' => 'http://',
	), $atts );

	return '<div class="c-icon"><div class="c-icon__icon"><img src="' . $a['url'] . '"></div><div class="c-icon__content">' . do_shortcode( $content ) . '</div></div>';
}
