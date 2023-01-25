<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<style>
		.no-results.not-found {
			padding: 40px 0;
			text-align: center;
		}
	</style>
	<section id="primary" class="content-area search">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			
			<section class="page-header container">
				<div class="row">
					<div class="page-title col-xs-12"><?= get_field('search_result_label','option'); ?> <?php printf( esc_html__( '%s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></div>
				</div>
			</section> 
			
			
			<div class="container product-preview-list">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'content' );

					endwhile;
					?>
				</div>
			</div>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
