<?php
/**
 * Template Name: Promo page
 */
$postId = get_the_ID();
get_header();
?>
    <section class="promo">
        <div class="container-fluid no-gutter">
            <div class="row bg no-gutter text-center"  style="background-image: url('<?= get_field('visual_background_image',$postId) ?>');">
                <div class="col-xs-12 col-sm-6 text-center" >
                  <div class="content sx">
                    <img class="img-responsive" src="<?= get_field('visual_promo_image_product',$postId) ?>" alt="<?= get_field('visual_title',$postId) ?>"  />
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 text-center cnt-dx">
                    <div class="content dx">
                        <img class="img-responsive center" src="<?= get_field('visual_promo_icon',$postId) ?>" alt="Care + Protect">
                        <?= get_field('visual_title',$postId) ?>
                        <?= get_field('visual_subtitle',$postId) ?>
                        <a href="<?= get_field('visual_cta_link',$postId) ?>" class="cta blue" onclick="captureOutboundLink('RosieresPromo_achetermaintenant_1');" target="<?= get_field('visual_cta_target',$postId) ?>"><?= get_field('visual_cta_label',$postId) ?></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="second-box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h4><?= get_field('circles_title',$postId) ?></h4>
                    </div>
                    <? while( have_rows('circles',$postId)) : the_row();?>
                      <div class="col-xs-12 col-sm-4 text-center ctn-item">
                         <div class="item">
                              <img class="img-responsive" src="<?= get_sub_field( 'icon') ?>" alt="">
                              <?= get_sub_field( 'description') ?>
                          </div>
                      </div>
                    <?php endwhile; ?>
                    <div class="col-xs-12 text-center">
                        <a href="<?= get_field('circles_cta_link',$postId) ?>" class="cta white" onclick="captureOutboundLink('RosieresPromo_achetermaintenant_2');"><?= get_field('circles_cta_label',$postId) ?></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="third-box">
            <div class="container" >
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="frame">
                          <div class="embed-area">
                                <div class="embed-container">
                                  <div id="img-video" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                                     <img class="video-img hidden-xs img-responsive" src="https://careplusprotect.com/fr/wp-content/themes/wp-bootstrap-starter/inc/assets/img/promo-fr/video-desktop.jpg" style="cursor:pointer" />
                                     <img class="video-img hidden-sm hidden-md hidden-lg img-responsive" src="https://careplusprotect.com/fr/wp-content/themes/wp-bootstrap-starter/inc/assets/img/promo-fr/video-mobile.jpg" style="cursor:pointer" />
                                  </div>
                                  <div style="display:none">
                                    <iframe id="promo-video" width="100%" height="auto" src="https://www.youtube.com/embed/<?= get_field('promo_video_id',$postId) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
          <div class="container-fluid no-gutter">
            <div class="row editorial-content">
                <div class="col-sm-12 col-md-6 no-gutter">
                    <div class="col-sm-12 hidden-md hidden-lg">
                        <div class="col-xs-12">
                            <img src="<?= get_field('detail_img_product',$postId) ?>" class="img-responsive" alt="care-protect-product-img">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-sm-1 spacer"></div>
                    <div class="col-sm-10">
                        <div class="inner-content">
                            <h2><?= get_field('detail_promo_title',$postId) ?></h2>
                            <h2 class="subtitle"><?= get_field('detail_promo_subtitle',$postId) ?></h2>
                            <p><?= get_field('detail_promo_code',$postId) ?></p>
                            <h1><?= get_field('details_list_title',$postId) ?></h1>
                    				<ul class="promo-ul">
                    					<?php while( have_rows('details_list', $postId) ): the_row();?>
                    					<li>
                    						<i class="fas fa-check promo-check"></i><span class="promo-list"><?= get_sub_field('detail') ?></span>
                    					</li>
                    					<?php endwhile; ?>
                    				</ul>


                            <a class="cta blue" href="<?= get_field('detail_cta_link',$postId) ?>" onclick="captureOutboundLink('RosieresPromo_achetermaintenant_3');" target="<?= get_field('detail_cta_target',$postId) ?>"><?= get_field('detail_cta_label',$postId) ?></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="col-xs-12">
                        <img src="<?= get_field('detail_img_product',$postId) ?>" class="img-responsive" alt="care-protect-product-img">
                    </div>
                </div>
            </div>
          </div>
        </section>
        <section id="disclaimer" class="disclaimer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="color:#ffffff">
                  <p ><?= get_field('promo_terms_and_conditions') ?></p>
                </div>
            </div>
        </div>
      </section>
    </section>

    <link rel="stylesheet" href="https://careplusprotect.com/wp-content/themes/wp-bootstrap-starter/inc/assets/css/promo.css">
    <script type="text/javascript">
      jQuery("#img-video").on("click",function(e) {
        jQuery("#promo-video").attr('src', jQuery("#promo-video").attr('src') + '?autoplay=1');
      });
    </script>
    <script>
        /**
         * Funzione che acquisisce un clic su un link in uscita in Analytics.
         * Questa funzione prende in considerazione e utilizza una stringa dell'URL valido.
         * Come etichetta evento. L'impostazione del metodo di trasporto su 'beacon' consente l'invio dell'hit.
         * utilizzando 'navigator.sendBeacon' in un browser che lo supporta.
         */
        var captureOutboundLink = function(source) {
            ga('send', {
                'hitType': 'event',
                'eventCategory': 'btnGeneral_' + source,
                'eventAction': 'click',
                'eventLabel': source,
                'hitCallback' : function () {
                    //alert("Event received");
                }
            });
        }
    </script>
<?php

get_footer();
