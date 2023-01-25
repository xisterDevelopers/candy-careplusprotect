<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$postId = get_the_ID();
$catLen = count(get_the_category());
$parentCategory;
$slaveCategory = null;
for($i = 0; $i < $catLen; $i++) {
	if(get_the_category()[$i]->category_parent == 0) {
		$parentCategory = get_the_category()[$i];
	} else {
		$slaveCategory = get_the_category()[$i];
	}
}
$selectionList = '';
$variantLen = 0;
$firstVariantCode = null;
while( have_rows('product_variants') ): the_row();
if($variantLen == 0) {
	$firstVariantCode = explode(" ",get_sub_field('prd_model'))[0];
}
$selectionList .= '<option value="'. strtolower(get_sub_field('variant_title')) .'">'. get_sub_field('variant_title') . '</option>';
$variantLen++;
endwhile;

?>

<article id="post-<?php the_ID(); ?>" class="single-product">
	<div class="container hidden-xs">
		<div class="row">
			<div class="breadcrumb col-xs-12">
				<a href="<?= get_site_url() ?>">Home<i class="fas fa-chevron-right"></i></a> <a href="<?= get_category_link($parentCategory) ?>"><?= $parentCategory->name ?><i class="fas fa-chevron-right"></i></a> <span><?= get_the_title() ?></span>
			</div>
		</div>
	</div>
	<div class="ctn-carousel">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="product-header-info">
						<?php $indexVariant = 0; while( have_rows('product_variants') ): the_row();?>
						<div class="item <?php echo $indexVariant == 0 ? 'active' : ''; ?>" data-variant="<?= strtolower(get_sub_field('variant_title')) ?>">
							<div class="ctn-carousel-img">
								<div class="icon-category <?= get_field('color','category_'.$parentCategory->term_id) ?>">
								<img class="img-responsive" src="<?= get_field('category_image_icon','category_'.$parentCategory->term_id) ?>" alt="<?= $parentCategory->name ?>">
								</div>
								<div class="thumbs">
									<?php 
										$index = 0; $first = "";
									 	while( have_rows('product_gallery') ): the_row(); 
										if($index == 0) { $first = get_sub_field('single_image'); }
										if(get_sub_field('single_image')) :
									?>
									 	<div class="bg-category" style="background-image: url('<?= get_field('category_image_background','category_'.$parentCategory->term_id) ?>')">
											<img class="img-responsive <?php echo $index == 0 ? 'active' : ''; ?>" src="<?= get_sub_field('single_image') ?>" alt="<?= get_the_title() ?>">
										</div>
									<?php 
										endif;
										$index++; 
										endwhile; 
									?>
								</div>
								<div class="bg-category ext" style="background-image: url('<?= get_field('category_image_background','category_'.$parentCategory->term_id) ?>')">
									<img class="img-responsive" src="<?= $first ?>" alt="<?= get_the_title() ?>">
									<?php if(get_field('year_product')) : ?>
									<div class="year-prod-logo">
										<img src="<?= get_field('year_product') ?>" />
									</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-sm-offset-3 col-sm-9 item border">
								<?php if(get_sub_field('prd_amazon_sale') && get_sub_field('prd_amazon_sale') == true) { ?>
								<div class="icon-amazon-sale">
									<img src="<?= get_template_directory_uri() ?>/inc/assets/img/discount-icon.png" />
								</div>
								<?php } ?>
								<div class="content">
									<h1><?= get_the_title() ?></h1>
									<h5><?php if($slaveCategory) echo $slaveCategory->name; ?></h5>
									<?php if($variantLen > 1) : ?>
									<div class="variant-area">
										<div class="lbl-variant"><?= get_field('product_variant_label','option') ?></div>
										<select class="changeVariant">
											<?= $selectionList ?>	
										</select>
									</div>
									<?php endif; ?>
									<ul>
										<li>
											<span class="label"><?= get_field('model_label','option') ?></span>
											<span class="value"><?= get_sub_field('prd_model') ?></span>
										</li>
										<li>
											<span class="label"><?= get_field('code_label','option') ?></span>
											<span class="value"><?= get_sub_field('prd_code') ?></span>
										</li>
										<li>
											<span class="label"><?= get_field('ean_label','option') ?></span>
											<span class="value"><?= get_sub_field('prd_ean') ?></span>
										</li>
										<?php if(get_sub_field('prd_format')){ ?>
										<li>
											<span class="label"><?= get_field('format_label','option') ?></span>
											<span class="value"><?= get_sub_field('prd_format') ?></span>
										</li>
										<?php } ?>
									</ul>
									<?php if(get_sub_field('prd_cta_link')){ ?>
										<div class="box-bottom">
											<a href="<?= get_sub_field('prd_cta_link') ?>" class="no-border" target="_blank"><?= get_field('label_cta_pdf','option') ?><i class="fas fa-chevron-right"></i></a>
										</div>
									<?php } ?>
									<?php if(get_sub_field('prd_amazon_link')){ ?>
										<div class="cta-amazon">
											<a href="<?= get_sub_field('prd_amazon_link') ?>" class="cta cta-orange" target="_blank"><?= get_field('buy_on_amazon_label','option') ?></a>
										</div>
									<?php } ?>
									<?php if(get_sub_field('prd_ecommerce_link')){ ?>
										<div class="cta-amazon">
											<a href="<?= get_sub_field('prd_ecommerce_link') ?>" class="cta blue" target="_blank"><?= get_field('buy_on_ecommerce_label','option') ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<?php $indexVariant++; endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid description-area">
		<div class="row">
			<div class="col-xs-12 col-sm-6 description">
				<h3><?= get_field('description_label','option') ?></h3>
				<?= the_content() ?>
			</div>
			<?php if(have_rows('features')) : ?>
			<div class="col-xs-12 col-sm-6 features">
				<h2><?= get_field('features_label','option') ?></h2>
				<ul>
					<?php while( have_rows('features') ): the_row();?>
					<li>
						<i class="fas fa-check"></i> <?= get_sub_field('single_feature') ?>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if(get_field('prd_video_id')) : ?>
	<div class="container-fluid video-area">
		<div class="row">
			<div class="col-xs-12 col-md-8 video-title">
				<div class="col-xs-12 col-md-8 col-md-offset-4">
					<div class="small-text"><?= get_field('our_video_label','option') ?></div>
					<h2><?= get_field('prd_video_title') ?></h2>
				</div>
			</div>
			<?php if(get_field('prd_video_description')){ ?>
			<div class="col-xs-12 col-md-4 video-description">
				<p><?= get_field('prd_video_description') ?></p>
			</div>
			<?php } ?>
			<div class="col-xs-12 video text-center">
				<div class="embed-area">
					<div class='embed-container'>
						<iframe src='https://www.youtube.com/embed/<?= get_field('prd_video_id') ?>?rel=0' frameborder='0' allowfullscreen></iframe>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="container-fluid description-area how-to">
		<div class="row">
			<?php if(get_field('prd_howto_desc')){?>
			<div class="col-xs-12 col-sm-6 description">
				<h2><?= get_field('how_to_use_label','option') ?></h2>
				<p><?= get_field('prd_howto_desc') ?></p>
			</div>
			<?php } ?>
			<?php if(have_rows('prd_how_to_steps')) : ?>
			<div class="col-xs-12 col-sm-6 how-to-list">
				
					<?php while( have_rows('prd_how_to_steps') ): the_row();?>
					<div class="single-how">
						<div class="col-xs-12 col-sm-3 col-lg-2">
							<div class="icon">
								<img src="<?= get_sub_field('prd_step_icon') ?>" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-9 col-lg-10">
							<div class="textual">
								<div class="title"><?= get_sub_field('prd_step_title') ?></div>
								<div class="text"><?= get_sub_field('prd_step_text') ?></div>
								
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php endwhile; ?>
				
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="container-fluid info-area">
		<div class="row">
			<?php if(get_field('prd_did_know_text')) : ?>
			<div class="col-xs-12 col-sm-5 black-gray-schema did-you-know">
				<div class="title">
					<div class="icon">
						<img src="<?= get_field('did_you_know_icon','option') ?>" />
					</div>
					<h2 class="col-xs-12 col-sm-8 col-sm-offset-2"><?= get_field('did_you_know_label','option'); ?></h2>
					<div class="clear"></div>
				</div>
				<div class="text">
					<?= get_field('prd_did_know_text') ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if(get_field('prd_did_know_text')) : ?>
			<div class="hidden-xs col-sm-2"></div>
			<?php endif; ?>
			<?php if(get_field('prd_just_text')) : ?>
			<div class="col-xs-12 col-sm-5 black-gray-schema just-for-you">
				<?php if(get_field('prd_just_text')) : ?>	
					<div class="title">
						<div class="icon">
							<img src="<?= get_field('just_for_you_icon','option') ?>" />
						</div>
						<h2 class="col-xs-12 col-sm-8 col-sm-offset-2"><?= get_field('just_for_you_label','option'); ?></h2>
						<div class="clear"></div>
					</div>
					<div class="text">
						<?= get_field('prd_just_text') ?>
					</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php 
	$isFiltrable = get_field('is_filtrable','category_'.$slaveCategory->term_id);
	//$isDebugMode = ($_REQUEST && $_REQUEST['debug'] == true);
	
	if($isFiltrable && !get_field('hide_filters')) :
		$slug = getSiteSlug();
		$table = "filter_hood_".$slug;
		global $wpdb;
		$compatibility = $wpdb->get_results( "SELECT * FROM ".$table." WHERE code = '".$firstVariantCode."' ORDER BY brand ASC");
	?>
	<script>
		var langTable = "<?= $slug ?>";
		var placeholderTable = "<?= get_field('search_filter_compatibility','option') ?>";
	</script>
	<div class="container-fluid description-area how-to">
		<div class="row">
			<div class="col-xs-12 col-sm-6 description">
				<h2><?= get_field('title_filter_compatibility','option') ?></h2>
				<p><?= get_field('desc_filter_compatibility','option') ?></p>
			</div>
			<div class="col-xs-12 col-sm-6 how-to-list">
				<table class="table-filter table-responsive">
					<thead>
						<tr>
							<th><?= get_field('brand_filter_compatibility','option') ?></th>
							<th><?= get_field('model_filter_compatibility','option') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($compatibility as $single) : ?>
						<tr>
							<td><?= $single->brand ?></td>
							<td><?= $single->model ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if(have_rows('products_related')) : ?>
	<div class="container-fluid related-container">
		<div class="row title-related">
			<div class="col-xs-12 col-sm-6">
				<h2 class="col-xs-12 col-md-offset-2 col-md-10"><?= get_field('related_product_label','option') ?></h2>
			</div>
		</div>
		<div class="row related_prod">
			<?php while(have_rows('products_related')) : the_row(); $postId = get_sub_field('product_id');
				$cat; 
				foreach((get_the_category($postId)) as $category) {
					if ($category->category_parent == 0) {
						$cat = $category;
					}
				}
			?>
			<div id="post-<?= $postId ?>" class="product-preview col-xs-12 col-sm-12 col-md-4 active">
				<div class="post-thumbnail" style="background-image: url('<?= get_field('category_image_background',$cat); ?>') ">
				<a href="<?=  get_permalink($postId) ?>" ><img src="<?= get_field('image_nude',$postId) ?>" class="img-responsive" alt="<?= get_the_title($postId) ?>" /></a>
				</div>
				<div class="entry-header">
					<?php if(get_field('amazon_sale',$postId) && get_field('amazon_sale',$postId) == true) { ?>
					<div class="icon-discount-amazon">
						<img src="<?= get_template_directory_uri() ?>/inc/assets/img/discount-icon.png" />
					</div>
					<?php } ?>
					<h2 class="entry-title"><?= get_the_title($postId) ?></h2>
				</div><!-- .entry-header -->
				<div class="cta-content">
					<div class="single-cta">
						<a href="<?=  get_permalink($postId) ?>" class="cta cta-white"><?= get_field('discover_more_label','option') ?></a>
					</div>
					<?php if(get_field('cta_amazon_link',$postId)) { ?>
					<div class="single-cta">
						<a href="<?=  get_field('cta_amazon_link',$postId) ?>" class="cta cta-orange"><?= get_field('buy_on_amazon_label','option') ?></a>
					</div>	
					<?php } ?>
				<?php ?>
				</div><!-- .entry-content -->
			</div><!-- #post-## -->
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>


</article><!-- #post-## -->
