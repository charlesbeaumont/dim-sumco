<?php
/**
 * Header template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

?><!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="/wp-content/themes/dim-sumco/icon.png">

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="375">

	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/apple-touch-icon.png">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png" sizes="32x32" type="image/png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div class="c-navigation" data-navigation>
    <div class="c-navigation__background"></div>

    <nav class="c-navigation__menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" data-navigation>
        <?php
        wp_nav_menu(array(
            'container' => false,
            'theme_location' => 'main-nav',
            'depth' => 0,
        ));
        ?>

        <div class="c-address">
            <?php echo nl2br( get_field( 'contact', 'option' ) ); ?>
        </div>
    </nav>

    <div class="c-navigation__topbar">
        <div class="c-navigation__logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.72 30.2"><g><g><path d="M76.35,17.19H85.9l-1,4H75.36Z"/><path d="M0,19.72V19.4C0,12.75,3.94,8.53,9.36,8.53A7.13,7.13,0,0,1,16,12.16V0h4.82V29.8H16V26.29A8,8,0,0,1,9.16,30.2C3.94,30.2,0,26.49,0,19.72Zm16.17-.24v-.31c0-4.58-2.11-6.85-5.62-6.85s-5.61,2.46-5.61,7v.32c0,4.58,2.31,6.77,5.41,6.77C13.7,26.37,16.17,24.14,16.17,19.48Z"/><path d="M27.16,2.8a2.87,2.87,0,0,1,5.73,0,2.87,2.87,0,0,1-5.73,0ZM27.68,9h4.81V29.8H27.68Z"/><path d="M39.34,9h4.82v3.19a7,7,0,0,1,6.33-3.63,5.86,5.86,0,0,1,5.9,3.75,8.22,8.22,0,0,1,7-3.75c3.82,0,6.92,2.35,6.92,8.09V29.8H65.55V16.94c0-3.07-1.32-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H52.45V16.94c0-3.07-1.36-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H39.34Z"/><path d="M90.36,23.31H94.9c.24,2.11,1.31,3.34,4.14,3.34,2.59,0,3.74-.91,3.74-2.67s-1.39-2.35-4.46-2.86c-5.49-.88-7.53-2.43-7.53-6.34,0-4.18,3.91-6.25,7.81-6.25,4.26,0,7.65,1.6,8.16,6.29H102.3c-.4-1.91-1.47-2.78-3.7-2.78-2.07,0-3.31,1-3.31,2.47s1,2.11,4.3,2.66c4.9.76,7.81,2,7.81,6.38,0,4.22-3,6.65-8.32,6.65S90.56,27.73,90.36,23.31Z"/><path d="M112.63,22.31V9h4.82V21.75c0,3.15,1.32,4.58,4.11,4.58a4.64,4.64,0,0,0,4.85-5V9h4.82V29.8h-4.82V26.53a7,7,0,0,1-6.61,3.67C115.7,30.2,112.63,27.85,112.63,22.31Z"/><path d="M137.7,9h4.82v3.19a7,7,0,0,1,6.33-3.63,5.86,5.86,0,0,1,5.9,3.75,8.22,8.22,0,0,1,7.05-3.75c3.82,0,6.92,2.35,6.92,8.09V29.8h-4.81V16.94c0-3.07-1.32-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8h-4.81V16.94c0-3.07-1.36-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H137.7Z"/></g></g></svg>
        </div>

        <div class="c-navigation__hamburger" data-navigation-toggle>
            <svg width="18" height="13" xmlns="http://www.w3.org/2000/svg"><g fill="#F8CD2A" fill-rule="evenodd"><path fill-rule="nonzero" d="M0 0h18v2.341H0z"/><path d="M0 4.678h18v2.339H0z"/><path fill-rule="nonzero" d="M0 9.821h18v2.341H0z"/></g></svg>
        </div>
    </div>
</div>

<a href="<?php echo esc_url( home_url() ); ?>" rel="home" class="c-logo <?php if ( is_singular( 'case' ) ) : ?>-white<?php endif; ?>" data-logo>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.72 30.2"><g><g><path d="M76.35,17.19H85.9l-1,4H75.36Z"/><path d="M0,19.72V19.4C0,12.75,3.94,8.53,9.36,8.53A7.13,7.13,0,0,1,16,12.16V0h4.82V29.8H16V26.29A8,8,0,0,1,9.16,30.2C3.94,30.2,0,26.49,0,19.72Zm16.17-.24v-.31c0-4.58-2.11-6.85-5.62-6.85s-5.61,2.46-5.61,7v.32c0,4.58,2.31,6.77,5.41,6.77C13.7,26.37,16.17,24.14,16.17,19.48Z"/><path d="M27.16,2.8a2.87,2.87,0,0,1,5.73,0,2.87,2.87,0,0,1-5.73,0ZM27.68,9h4.81V29.8H27.68Z"/><path d="M39.34,9h4.82v3.19a7,7,0,0,1,6.33-3.63,5.86,5.86,0,0,1,5.9,3.75,8.22,8.22,0,0,1,7-3.75c3.82,0,6.92,2.35,6.92,8.09V29.8H65.55V16.94c0-3.07-1.32-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H52.45V16.94c0-3.07-1.36-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H39.34Z"/><path d="M90.36,23.31H94.9c.24,2.11,1.31,3.34,4.14,3.34,2.59,0,3.74-.91,3.74-2.67s-1.39-2.35-4.46-2.86c-5.49-.88-7.53-2.43-7.53-6.34,0-4.18,3.91-6.25,7.81-6.25,4.26,0,7.65,1.6,8.16,6.29H102.3c-.4-1.91-1.47-2.78-3.7-2.78-2.07,0-3.31,1-3.31,2.47s1,2.11,4.3,2.66c4.9.76,7.81,2,7.81,6.38,0,4.22-3,6.65-8.32,6.65S90.56,27.73,90.36,23.31Z"/><path d="M112.63,22.31V9h4.82V21.75c0,3.15,1.32,4.58,4.11,4.58a4.64,4.64,0,0,0,4.85-5V9h4.82V29.8h-4.82V26.53a7,7,0,0,1-6.61,3.67C115.7,30.2,112.63,27.85,112.63,22.31Z"/><path d="M137.7,9h4.82v3.19a7,7,0,0,1,6.33-3.63,5.86,5.86,0,0,1,5.9,3.75,8.22,8.22,0,0,1,7.05-3.75c3.82,0,6.92,2.35,6.92,8.09V29.8h-4.81V16.94c0-3.07-1.32-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8h-4.81V16.94c0-3.07-1.36-4.39-3.71-4.39a4.44,4.44,0,0,0-4.58,4.78V29.8H137.7Z"/></g></g></svg>
</a>

<div class="wrapper">

    <header class="c-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <section class="o-section u-text-xlarge">

            <div class="o-section__border -no-logo -center">
                <div class="o-section__border-inner">
                </div>
            </div>
            <div class="o-section__content">
                <div class="o-section__content-inner">
                    <?php if ( is_singular( 'case' ) ) : ?>
                    <div class="c-header__breadcrumbs">
                        <div class="c-header__breadcrumb">
                            Work
                        </div>
                        <div class="c-header__breadcrumb">
                        <?php the_title(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </section>

	</header>
