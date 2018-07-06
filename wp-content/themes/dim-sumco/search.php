<?php
/**
 * Search template.
 *
 * @link https://lillehummer.nl
 *
 * @package dim-sumco
 */

get_header(); ?>

<div class="content">

	<main class="main clearfix" role="main">

		<h1 class="archive-title"><span><?php esc_html_e( 'Search Results for:', 'dim-sumco' ); ?></span> <?php echo esc_attr( get_search_query() ); ?></h1>

		<?php while ( have_posts() ) : the_post(); ?>

		<article <?php post_class( 'article-entry clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<header class="article-entry__header">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</header>

			<section class="article-entry__content">
				<?php the_excerpt(); ?>
			</section>

		</article>

		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
