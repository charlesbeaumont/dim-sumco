<?php
/**
 * 404 template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<div class="content">

	<div class="main clearfix" role="main">

		<article class="article clearfix">

			<header class="article__header">
				<h1><?php esc_html_e( 'Epic 404 - Article Not Found', 'dim-sumco' ); ?></h1>
			</header>

			<section class="article__content">
				<p><?php esc_html_e( 'The article you were looking for was not found, but maybe try looking again!', 'dim-sumco' ); ?></p>
			</section>

		</article>

	</div>

</div>

<?php get_footer();
