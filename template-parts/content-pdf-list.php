<?php
/**
 * Template Name: Pdf list
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main pdf-list" role="main">
			<?php if(get_field('background_image','option')){?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 no-gutter">
						<div class="reel">
							<div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_field('background_image','option') ?>')"></div>
							<img class="img-responsive" src="<?= get_field('background_image','option') ?>" alt="">
							<div class="content-reel">
								<div class="inner-content">
									<div class="icon">
										<img class="img-responsive" src="<?= get_field('icon_image','option') ?>" alt="">
									</div>
									<div class="textual">
										<h1><?= get_field('title_page','option') ?></h1>
										<p><?=  get_field('subtitle_page','option') ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
            <div class="container">
				<div class="row">
					<?php 	
						if( have_rows('pdf','option') ){
							while ( have_rows('pdf','option') ){ 
								the_row();
							?>

							<div class="col-xs-6 col-sm-6 col-md-3 ctn-item">
								<div class="item">
									<h3><?=  get_sub_field('title'); ?></h3>
									<img src="<?= get_template_directory_uri() ?>/inc/assets/img/pdf-icon.svg" alt="">
									<a href="<?=  get_sub_field('link'); ?>" target="_blank" class="cta blue"><?=  get_sub_field('cta_label') ?></a>
								</div>
							</div>
						<?php
							}
						}
						?>
					<?php 

					?>
				</div>
				
			</div>
			<?php if( have_rows('boxes', 'option') ){
				get_template_part( 'template-parts/content', 'download-stripes' );
			}?>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
