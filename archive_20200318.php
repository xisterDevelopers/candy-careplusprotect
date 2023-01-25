<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="">
		<main id="main" class="site-main" role="main">
		<?php
		$term = get_queried_object();
		$currentSlug = $term->slug;
		$filtrable = (get_field('is_filtrable',$term) && get_field('is_filtrable',$term) == true) ? true : false;
		if($term->category_parent > 0) {
			$term =  get_category($term->category_parent);
		}
		$term_children = get_categories( array('child_of' => $term->term_id) );
		
		if ( have_posts() ) : ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 no-gutter">
						<div class="reel">
							<div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_field('category_image_header',$term) ?>')"></div>
							<img class="img-responsive" src="<?= get_field('category_image_header',$term) ?>" alt="">
							<div class="content-reel">
								<div class="inner-content">
									<div class="icon <?= get_field('color',$term) ?>">
										<img class="img-responsive" src="<?= get_field('category_image_icon',$term) ?>" alt="">
									</div>
									<div class="textual">
										<h1><?= get_the_archive_title(); ?></h1>
										<?= term_description($term->term_id);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="filters row">
					<?php if(count($term_children) > 0) : ?>
					<div class="col-xs-12">
						<span class="small-text"><?= get_field('filter_by_label','option') ?></span>
					</div>
					<div class="col-xs-12 filter-list">
						<?php if(count($term_children) == 1) { ?>
							<span class="single-filter active"><?= $term_children[0]->name ?></span>
						<?php } else { ?>
						<select id="changeFilter">
							<option value="<?= get_category_link($term) ?>" selected><?= get_field('search_choose_label','option') ?></option>
							<?php foreach($term_children as $singleTerm) { ?>
								<option value="<?= get_category_link($singleTerm) ?>" <?php echo $currentSlug == $singleTerm->slug ? "selected='true'" : ""; ?>><?= $singleTerm->name ?></option>
							<?php } ?>
						</select>
						<?php } ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if($filtrable) : 

				global $wpdb;
				$slug = getSiteSlug();
				
				$codes = $wpdb->get_results( "SELECT * FROM filter_hood_".$slug." ORDER BY code ASC");
				$models = $wpdb->get_results( "SELECT TRIM(model) AS model FROM filter_hood_gb GROUP BY TRIM(model)" );
				$brands = $wpdb->get_results( "SELECT brand FROM filter_hood_gb GROUP BY TRIM(brand)" );
				$brandsxModel = $wpdb->get_results( "SELECT brand, GROUP_CONCAT(TRIM(model)) AS model from filter_hood_gb group by brand" );
				
				$brandModelArray = array();
				foreach($brandsxModel as $brxMod) {
					$brandModelArray[$brxMod->brand] = array();
					$brandModelArray[$brxMod->brand]['model'] = trim($brxMod->model);
				}

				$assocArrayCode = array();
				foreach($codes as $code) {
					if(array_search($code->code,$assocArrayCode) === false){
						$assocArrayCode[$code->code] = array();
						$assocArrayCode[$code->code]['model'] = array();
						$assocArrayCode[$code->code]['brand'] = array();
					}
				}
				foreach($codes as $code) {
					if(array_search($code->model,$assocArrayCode[$code->code]['model']) === false){
						array_push($assocArrayCode[$code->code]['model'],$code->model);
					}
					if(array_search($code->brand,$assocArrayCode[$code->code]['brand']) === false){
						array_push($assocArrayCode[$code->code]['brand'],$code->brand);
					}
				}

			?>
			<script>
				var brandModel = <?= json_encode($brandModelArray); ?>;
				var models = <?= json_encode($models) ?>;
			</script>
			<div class="container cooker-hood-filter">
				<div class="row">
				   <div class="col-xs-12 bg-black">
						<div class="col-xs-12 col-sm-6">
							<h3><?= get_field('cooker_hood_label','option') ?></h3>
							<?= get_field('cooker_hood_description','option') ?>
						</div>
						<div class="col-xs-12 col-sm-3 selection">
							<div class="lbl-title"><?= get_field('cooker_hood_brand','option') ?></div>
							<select id="brand-cooker-hood">
								<option value="" selected><?= get_field('search_choose_label','option') ?></option>
								<?php foreach($brands as $brand) { ?>
								<option value="<?= trim($brand->brand) ?>"><?= trim($brand->brand) ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-xs-12 col-sm-3 selection">
							<div class="lbl-title"><?= get_field('cooker_hood_model','option') ?></div>
							<select id="model-cooker-hood">
								<option value="" class="no-remove" selected><?= get_field('search_choose_label','option') ?></option>
								<?php foreach($models as $model) { ?>
								<option value="<?= $model->model ?>"><?= $model->model; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>

			<?php endif; ?>
			<div class="container product-preview-list">
				<div class="row">
					<?php
					/* Start the Loop */
					$indexArchive = 0;
					while ( have_posts() ) : the_post();
					$idPost = get_the_ID();
					$code;
					if (have_rows('product_variants',$idPost)) {
						while (have_rows('product_variants',$idPost)) {
						  the_row();
						  $code = explode(" ", get_sub_field('prd_model'))[0];
						  break;
						}
					}
					?>
					<span class="filterable" data-code="<?= $code ?>" data-brand="<?php echo $assocArrayCode ? implode(",",$assocArrayCode[$code]['brand']) : ''; ?>" data-model="<?php echo $assocArrayCode ? implode(",",$assocArrayCode[$code]['model']) : ''; ?>">
					<?php
						include( locate_template( 'template-parts/content.php', false, false ) ); 
						//get_template_part( 'template-parts/content', get_post_format() );
					?>
					</span>
					<?php
					$indexArchive++;
					endwhile;
					?>
				</div>
			</div>
			<?php if($indexArchive > 10) : ?>
			<div class="container discover-all">
				<div class="row">
					<div class="col-xs-12">
						<a class="cta blue" href="javascript:void(0)"><?= get_field('discover_products_label','option') ?></a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
