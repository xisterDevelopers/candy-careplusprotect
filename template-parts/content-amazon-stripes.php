<section class="bg-amazon"><!--style="background:url('<?= get_field('amazon_image_background','option')?>') center center no-repeat;"-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ctn-bg no-gutter">
                <div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_field('amazon_image_background','option')?>');"></div>
                <img src="<?= get_field('amazon_image_background','option')?>" class="img-responsive hidden-xs" alt="">
                <div class="col-xs-12 col-sm-offset-3 col-sm-5 ctn-cta-orange">
                    <a href="<?= get_field('amazon_cta_link','option')?>" onclick="captureOutboundLink('<?= get_field('amazon_cta_link','option')?>', 'banner', 'Amazon', '<?= getSiteSlug() ?>'); return false;"
             target="<?= get_field('amazon_cta_target','option')?>" class="cta cta-orange"><?= get_field('amazon_cta_label','option')?></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>
