

<?php get_header(); ?>

<section class="color-custom style-default button-default layout-full-width no-content-padding header-simple minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2089">
 <div id="Wrapper">
        <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <div id="Header">
                <div class="container-fluid">
                    <div class="row">
                        <?php if(have_rows('slide', 'option')){ ?>
                        <div class="owl-carousel owl-theme carousel-hp-reel">
                            <?php while( have_rows('slide', 'option') ): the_row();?>
                            <div class="col-xs-12 no-gutter item">
                                <div class="reel">
                                    <?php if (wp_is_mobile()){?>
                                      <img class="img-responsive center hidden-xs" src="<?= get_sub_field('image_mobile','option') ?>" alt="">
                                      <div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_sub_field('image_mobile','option')?>');"></div>
                                    <?php } else {?>
                                      <img class="img-responsive center hidden-xs" src="<?= get_sub_field('image','option') ?>" alt="">
                                      <div class="mobile-image hidden-sm hidden-md hidden-lg" style="background-image: url('<?= get_sub_field('image','option')?>');"></div>
                                    <?php }?>
                                    <div class="content-reel">
                                        <div class="inner-content">
                                            <h1 <? if (get_sub_field('ecological','option')){?>class="text-green"<?}?>><?= get_sub_field('title','option') ?></h1>
                                            <h2><?= get_sub_field('subtitle','option') ?></h2>
                                            <?php if( get_sub_field('cta_label','option')) { ?>
                                            <a class="<? if (get_sub_field('ecological','option')){?>cta green <?}else{?>cta blue<?}?>" target="<?= get_sub_field('cta_target','option') ?>" href="<?= get_sub_field('cta_link','option') ?>"><?= get_sub_field('cta_label','option') ?></a>
                                            <?php } ?>
                                            <?php if( get_sub_field('id_video','option') ) { ?>
                                            <a class="cta cta-white cta-video" target="_self" href="https://www.youtube.com/embed/<?= get_sub_field('id_video','option') ?>?autoplay=1&wmode=opaque&fs=1 " rel="https://www.youtube.com/embed/<?= get_sub_field('id_video','option') ?>"><?= get_sub_field('cta_label_video','option') ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if( get_sub_field('id_video','option') ) { ?>
                                    <div class="video-thumb">
                                        <img src="<?= get_sub_field('thumb_video','option') ?>" alt="">
                                        <a class="cta-video" href="https://www.youtube.com/embed/<?= get_sub_field('id_video','option') ?>?autoplay=1&wmode=opaque&fs=1" rel="https://www.youtube.com/embed/<?= get_sub_field('id_video','option') ?>"><?= get_sub_field('cta_label_video','option') ?></a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php } ?>
                    </div>
                    <?php if(count( get_field('slide','option') ) == 1){ ?>
                    <div class="row hidden-xs">
                        <div class="col-md-12 hidden-xs hidden-sm">
                            <div class="spacer_60">&nbsp;</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="container-fluid no-gutter">
                            <div class="row editorial-content">
                                <div class="col-sm-12 col-md-6 no-gutter">
                                    <div class="col-sm-12 hidden-md hidden-lg">
                                        <div class="col-xs-12">
                                            <img src="<?= get_field('editorial_image','option') ?>" class="img-responsive" alt="care-protect-product-img">
                                            <div class="ctn-icon hidden-sm hidden-md hidden-lg ">
                                                <div class="item">
                                                <?php
                                                    //$index = 1;
                                                while( have_rows('icon', 'option') ): the_row(); ?>
                                                <div class="ctn-img">
                                                    <img src="<?= get_sub_field('icon_image') ?>" class="img-responsive" alt="care-protect-icon">
                                                </div>
                                                <?php if( get_row_index() % 2 == 0 && get_row_index() != count(get_field('icon','option')))  { ?>
                                                </div>
                                                <div class="item">
                                                <?php } ?>
                                                <?php
                                                    //$index++;
                                                    endwhile;
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-md-3 ctn-icon hidden-xs hidden-sm ">
                                        <div class="item">
                                        <?php
                                            //$index = 1;
                                        while( have_rows('icon', 'option') ): the_row(); ?>
                                        <div class="ctn-img">
                                            <img src="<?= get_sub_field('icon_image') ?>" class="img-responsive" alt="care-protect-icon">
                                        </div>
                                        <?php if( get_row_index() % 2 == 0 && get_row_index() != count(get_field('icon','option')))  { ?>
                                        </div>
                                        <div class="item">
                                        <?php } ?>

                                        <?php
                                            //$index++;
                                            endwhile;
                                        ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="inner-content">
                                            <h2><?= get_field('editorial_title','option') ?></h2>
                                            <h2 class="subtitle"><?= get_field('editorial_subtitle','option') ?></h2>
                                            <p><?= get_field('editorial_description','option') ?></p>
                                            <p class="gray"><?= get_field('editorial_description_gray','option') ?></p>
                                            <a class="cta blue" href="<?= get_field('editorial_cta_link','option') ?>" target="<?= get_field('editorial_cta_target','option') ?>"><?= get_field('editorial_cta_label','option') ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 ctn-icon hidden-xs hidden-md hidden-lg ">
                                        <div class="item">
                                        <?php
                                            //$index = 1;
                                        while( have_rows('icon', 'option') ): the_row(); ?>
                                        <div class="ctn-img">
                                            <img src="<?= get_sub_field('icon_image') ?>" class="img-responsive" alt="care-protect-icon">
                                        </div>
                                        <?php if( get_row_index() % 2 == 0 && get_row_index() != count(get_field('icon','option')))  { ?>
                                        </div>
                                        <div class="item">
                                        <?php } ?>

                                        <?php
                                            //$index++;
                                            endwhile;
                                        ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 hidden-sm hidden-xs">
                                    <div class="col-xs-12">
                                        <img src="<?= get_field('editorial_image','option') ?>" class="img-responsive" alt="care-protect-product-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctn-carousel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-3">
                                            <h2><?= get_field('carousel_evidence_title','option') ?></h2>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="owl-carousel owl-theme outer-ctn carousel-hp-evidence">
                                            <?php while( have_rows('carousel_slide', 'option') ): the_row(); ?>
                                            <div class="item">
                                                <div class="ctn-carousel-img">
                                                    <img class="img-responsive" src="<?= get_sub_field('carousel_img') ?>">
                                                </div>
                                                <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-8 item border">
                                                    <div class="content">
                                                        <h3><?= get_sub_field('carousel_subtitle') ?></h3>
                                                        <?php if(have_rows('carousel_features')){ ?>
                                                        <ul>
                                                        <?php while( have_rows('carousel_features') ): the_row();?>
                                                            <li><?= get_sub_field('text') ?></li>
                                                        <?php endwhile; ?>
                                                        </ul>
                                                        <?php } ?>
                                                        <?php if(have_rows('ctas')){ ?>
                                                            <div class="ctas">
                                                            <?php while( have_rows('ctas') ): the_row();?>
                                                                <a href="<?= get_sub_field('link') ?>" class="cta blue" target="<?= get_sub_field('target') ?>"><?= get_sub_field('label') ?></a>
                                                            <?php endwhile; ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--div class="spacer-150"></div-->
                        <section class="categories-section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-9 col-sm-8 col-md-6 dark">
                                        <div class="inner-ctn">
                                            <h4><?= get_field('categories_suptitle','option') ?></h4>
                                            <h2><?= get_field('categories_title','option') ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row categories-list">
                                    <?php
                                        $delay = 1;
                                        while( have_rows('categories_list', 'option') ): the_row();
                                        $postId = get_sub_field('single_category'); ?>
                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                        <div class="item <?if(get_field('ecological','category_' . $postId)){?> item-green <?}?>wow fadeInUp" data-wow-delay="0.<?= $delay ?>s">
                                            <img src="<?= get_field('category_image_home','category_' . $postId) ?>" class="img-responsive" alt="care-protect-icon">
                                            <h5><?= get_field('category_short_text','category_' . $postId) ?></h5>
                                            <a href="<?= get_category_link($postId) ?>"><?= get_cat_name($postId) ?></a>
                                        </div>
                                    </div>
                                    <?php
                                        $delay += 1;
                                        endwhile;
                                    ?>
                                </div>
                            </div>
                        </section>
                        <?php
                                $box1 = get_field('box_1','option');
                                $box2 = get_field('box_2','option');
                                $box3 = get_field('box_3','option');
                                $box4 = get_field('box_4','option');

                            if( get_field('suptitle_top_right','option') ){ ?>
                        <section class="best-seller">
                            <div class="container">
                                <div class="row first-row">

                                    <div class="col-sm-12 hidden-md hidden-lg">
                                        <div class="item-2">
                                            <h4><?= get_field('suptitle_top_right','option') ?></h4> <h2><?= get_field('title_top_right','option') ?></h2>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="item item-1">
                                            <img class="img-responsive" src="<?= $box1['image_background'] ?>" alt="">
                                            <div class="inner">
                                                <h3><?= $box1['title'] ?></h3>
                                                <a href="<?= $box1['cta_link'] ?>" target="_blank"><img class="img-responsive" src="<?= $box1['image'] ?>" alt=""></a>
                                                <a href="<?= $box1['cta_link'] ?>" target="_blank" class="cta cta-orange"><?= $box1['cta_label'] ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 hidden-md hidden-lg">
                                        <div class="item item-3">
                                            <img class="img-responsive" src="<?= $box2['image_background'] ?>" alt="">
                                            <div class="inner">
                                                <h3><?= $box2['title'] ?></h3>
                                                <a href="<?= $box2['cta_link'] ?>" target="_blank"><img class="img-responsive" src="<?= $box2['image'] ?>" alt=""></a>
                                                <a href="<?= $box2['cta_link'] ?>" target="_blank" class="cta cta-orange"><?= $box2['cta_label'] ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 hidden-sm hidden-xs">
                                        <div class="col-md-12 hidden-sm">
                                            <div class="item-2">
                                                <h4><?= get_field('suptitle_top_right','option') ?></h4> <h2><?= get_field('title_top_right','option') ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 item-3">
                                            <div class="item">
                                                <img class="img-responsive" src="<?= $box2['image_background'] ?>" alt="">
                                                <div class="inner">
                                                    <h3><?= $box2['title'] ?></h3>
                                                    <a href="<?= $box2['cta_link'] ?>" target="_blank"><img class="img-responsive" src="<?= $box2['image'] ?>" alt=""></a>
                                                    <a href="<?= $box2['cta_link'] ?>" target="_blank" class="cta cta-orange"><?= $box2['cta_label'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row second-row">
                                    <div class="col-md-2 item-4 hidden-sm hidden-xs">
                                        <div>
                                            <h4><?= get_field('suptitle_bottom_left','option') ?></h4>
                                            <h2><?= get_field('title_bottom_left','option') ?></h2>
                                            <h2 class="highlights"><?= get_field('discount_label','option') ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <div class="item item-5">
                                            <img class="img-responsive" src="<?= $box3['image_background'] ?>" alt="">
                                            <div class="inner">
                                                <h3><?= $box3['title'] ?></h3>
                                                <a href="<?= $box3['cta_link'] ?>" target="_blank"><img class="img-responsive" src="<?= $box3['image'] ?>" alt=""></a>
                                                <a href="<?= $box3['cta_link'] ?>" target="_blank" class="cta cta-orange"><?= $box3['cta_label'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <div class="item item-6">
                                            <img class="img-responsive" src="<?= $box4['image_background'] ?>" alt="">
                                            <div class="inner">
                                                <h3><?= $box4['title'] ?></h4>
                                                <a href="<?= $box4['cta_link'] ?>" target="_blank"><img class="img-responsive" src="<?= $box4['image'] ?>" alt=""></a>
                                                <a href="<?= $box4['cta_link'] ?>"  target="_blank" class="cta cta-orange"><?= $box4['cta_label'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 item-4 hidden-md hidden-lg">
                                        <div>
                                            <h4><?= get_field('suptitle_bottom_left','option') ?></h4>
                                            <h2><?= get_field('title_bottom_left','option') ?></h2>
                                            <h2 class="highlights"><?= get_field('discount_label','option') ?></h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                        <?php } ?>
                        <?php if(get_field('amazon_image_background','option') && get_field('amazon_cta_link','option') ){
                             get_template_part( 'template-parts/content', 'amazon-stripes' );
                        }?>
                        <?php if( have_rows('boxes', 'option') ){
                            get_template_part( 'template-parts/content', 'download-stripes' );
                        }?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    <div class="overlayTemplate" style="">
        <div class="table">
            <div class="table-cell">
                <div class="" style="width:100%;height:100%;max-height:1048px;">
                    <iframe class="" style="width:100%;height:100%;max-height:1048px;background: #000" src=""  controls="" controlslist="nodownload">
                    </iframe>
                </div>
            </div>
        </div>
        <a title="Close" href="#" class="closeOverlayTemplate"><i class="fas fa-times"></i></a>
    </div>
</section>

<?php get_footer();?>
