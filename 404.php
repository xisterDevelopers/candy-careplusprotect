<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
        <main id="main" class="site-main error-404" role="main">
            <div class="container" style="margin:30px auto;">
				<div class="row">
					<div class="col-xs-12">
						<h1><?= get_field('404_title','option') ?></h1>
						<h2><?= get_field('404_description','option') ?></h2>
						<a href="<?= home_url('/')?>" class="cta blue">Home</a>
					</div>
				</div>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
