<?php if(have_rows('boxes', 'option')){ ?>
<section class="stripes-download">
    <div class="container-fluid">
        <div class="row">
        <?php while( have_rows('boxes', 'option') ): the_row(); ?>
            <div class="col-xs-12 col-sm-6 box" style="background:url('<?= get_sub_field('background_image') ?>') center center no-repeat;">
                <div class="elements">
                    <img src="<?= get_sub_field('icon') ?>" alt="">
                    <a href="<?= get_sub_field('link') ?>" class="cta" target="<?= get_sub_field('target') ?>"><?= get_sub_field('label') ?></a>
                </div>
            </div>
        <?php endwhile;?>
        </div>
    </div>
</section>
<?php } ?>