<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" class="single-page">
	<?php
	$postId = get_the_ID();
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 no-gutter">
				<?php if(get_the_post_thumbnail_url()) { ?> 
				<div class="reel">
					<div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')"></div>
					<img class="img-responsive" src="<?= get_the_post_thumbnail_url() ?>" alt="">
					<div class="content-reel">
						<div class="inner-content">
							<!--div class="textual">
								<h1><?= get_the_title(); ?></h1>
							</div-->
						</div>
					</div>
				</div>
				<?php } else { ?>
					<!--h1><?= get_the_title(); ?></h1-->
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row text-area">
			<div class="col-xs-12">
				<?= get_the_content(); ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
