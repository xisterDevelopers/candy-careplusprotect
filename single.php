<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );



		endwhile; // End of the loop.

		if(get_field('amazon_image_background','option') && get_field('amazon_cta_link','option') ){
			get_template_part( 'template-parts/content', 'amazon-stripes' ); 
	   	}

		
		?>
	
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
