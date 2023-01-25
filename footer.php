<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$slug = getSiteSlug(); 
?>
<footer style="<?php echo $slug == '' ? 'padding-top:0px;' : '' ?>">
	<!--div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-md-3 logo text-center">
				<img src="<?= get_template_directory_uri() ?>/inc/assets/img/logo.png" alt="Care Product" />
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-offset-1 col-md-offset-1 col-md-4 menu-list">
				<ul>
				<?php 
				$menuVoices = wp_get_nav_menu_items("Footer");
				foreach($menuVoices as $voice) {
				?>
					<li><a href="<?= $voice->url ?>"><?= $voice->title ?></a></li>
				<?php
				}
				?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-offset-1 col-md-3">
				<?php if(get_field('certified_title_label','option')){?>
					<div class="ctn-quality">
						<img class="img-responsive" src="<?= get_field('certified_quality_icon','option') ?>" alt="">
						<div class="inner">
							<h4><?= get_field('certified_title_label','option') ?></h4>
							<h5><?= get_field('certified_label_text','option') ?></h5>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div-->

	<div class="container-fluid">
        <?php 
		if($slug != '') { 
		?>
		<div class="ctn-footer">
			<div class="ctn-logo">
				<img src="<?= get_template_directory_uri() ?>/inc/assets/img/logo_footer.png" alt="Care Product" />
			</div>
			<div class="ctn-list menu-list">
				<ul>
				<?php 
				$menuVoices = wp_get_nav_menu_items("Footer");
				foreach($menuVoices as $voice) {
				?>
					<li><a href="<?= $voice->url ?>"><?= $voice->title ?></a></li>
				<?php
				}
				?>
				</ul>
				<ul>
				<?php 
				$menuVoices = wp_get_nav_menu_items("Corporate pages");
				foreach($menuVoices as $voice) {
				?>
					<li><a href="<?= $voice->url ?>"><?= $voice->title ?></a></li>
				<?php
				}
				?>
				</ul>
			</div>
			<?php if(get_field('certified_title_label','option')){ ?>
			<div class="ctn-quality">
				<img class="img-responsive" src="<?= get_field('certified_quality_icon','option') ?>" alt="">
				<div class="inner">
					<h4><?= get_field('certified_title_label','option') ?></h4>
					<h5><?= get_field('certified_label_text','option') ?></h5>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
		<div class="footer-info text-center">
			<p>
				<?= get_field('footer_info','option') ?>
			</p>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>