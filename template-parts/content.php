<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$postId = get_the_ID();

?>

<article id="post-<?php the_ID(); ?>" class="product-preview col-xs-12 col-sm-12 col-md-6 <?php echo ($indexArchive < 10) ? 'active' : ''; ?>" data-model="<?= get_field('product_model',$postId) ?>" data-brand="<?= get_field('product_brand',$postId) ?>">
	<div class="post-thumbnail">
		<a href="<?=  get_permalink() ?>" ><img src="<?= get_field('image_nude',$postId) ?>" class="img-responsive" alt="<?= get_the_title() ?>" />
		<?php  if(get_field('year_product',$postId)) : ?>
			<div class="year-prod-logo">
				<img src="<?= get_field('year_product',$postId) ?>" />
			</div>
		<?php endif;  ?>
		</a>
	</div>
	<div class="entry-header">
		<?php if(get_field('amazon_sale',$postId) && get_field('amazon_sale',$postId) == true) { ?>
		<div class="icon-discount-amazon">
			<img src="<?= get_template_directory_uri() ?>/inc/assets/img/discount-icon.png" />
		</div>
		<?php } ?>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div><!-- .entry-header -->
	<div class="cta-content">
		<div class="single-cta">
			<a href="<?=  get_permalink() ?>" class="cta cta-white"><?= get_field('discover_more_label','option') ?></a>
		</div>
		<?php if(get_field('cta_amazon_link',$postId)) { ?>
		<div class="single-cta">
			<a href="<?=  get_field('cta_amazon_link',$postId) ?>" class="cta cta-orange"><?= get_field('buy_on_amazon_label','option') ?></a>
		</div>	
		<?php } ?>
	<?php ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
