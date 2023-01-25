<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$slug = getSiteSlug();
switch ($slug) {
  case 'gb':
    $lang = "en-GB";
    break;
  case 'it':
    $lang = "it-IT";
    break;
  case 'es':
    $lang = "es-ES";
    break;
  case 'fr':
    $lang = "fr-FR";
    break;
  case 'de':
    $lang = "de-DE";
    break;
  case 'cz':
    $lang = "cs-CZ";
    break;
  case 'sk':
    $lang = "sk-SK";
    break;
  case 'nl':
    $lang = "nl-NL";
    break;
  case 'gr':
    $lang = "el-GR";
    break;
  case 'pt':
    $lang = "pt-PT";
    break;
  case 'tr':
    $lang = "tr-TR";
    break;
  case 'ru':
    $lang = "ru-RU";
    break;
  case 'pl':
    $lang = "pl-PL";
    break;
  case 'ch-it':
    $lang = "it-CH";
    break;
  case 'ch-fr':
    $lang = "fr-CH";
    break;
  case 'ch-de':
    $lang = "de-CH";
    break;
  case 'be-fr':
    $lang = "fr-BE";
    break;
  case 'be-nl':
    $lang = "nl-BE";
    break;
  default:
    $lang = "en-US";
    break;
}
//var_export(language_attributes());
?><!DOCTYPE html>
<?php /* <html <?php language_attributes(); ?>> */ ?>

<html lang="<?= $lang ?>">
<head>
    <!-- OneTrust Cookies Consent Notice start for careplusprotect.xister-test.com -->
    <script type="text/javascript" src="https://cdn.cookielaw.org/consent/84e167ed-e146-46d3-bb91-20730f0a9e8d/OtAutoBlock.js" ></script>
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="84e167ed-e146-46d3-bb91-20730f0a9e8d" ></script>
    <script type="text/javascript">
    function OptanonWrapper() { }
    </script>
    <!-- OneTrust Cookies Consent Notice end for careplusprotect.xister-test.com -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link type="image/x-icon" href="<?= get_template_directory_uri() ?>/inc/assets/img/favicon.ico" rel="icon"/>
    <link type="image/x-icon" href="<?= get_template_directory_uri() ?>/inc/assets/img/favicon.ico" rel="shortcut icon"/>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,900+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/inc/assets/css/fontawesome.min.css">
    <!-- CSS -->
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/structure.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/architect3.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/datatables.min.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/header.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/custom.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/product.css'>
    <link rel='stylesheet' href='<?= get_template_directory_uri() ?>/inc/assets/css/footer.css'>
    <script src=https://cscoreproweustor.blob.core.windows.net/widget/scripts/cswidget.loader.js defer></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-147114948-1', 'careplusprotect.com');
      ga('send', 'pageview');
    </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M57BT723ZT"></script>
    <script> window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date()); gtag('config', 'G-M57BT723ZT');
    </script>

</head>

<body <?php body_class(); ?> > 
<div id="page" class="site" >
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container container-extended" id="ctn-header">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" class="brand">
                            <img alt="<?php bloginfo("name"); ?>" src="<?php echo get_template_directory_uri() . '/inc/assets/img/logo-claim.png'; ?>"
                            alt="<?php bloginfo("name"); ?>"
                            class="logo_image">
                            <img alt="<?php bloginfo("name"); ?>" src="<?php echo get_template_directory_uri() . '/inc/assets/img/logo-claim.png'; ?>"
                            alt="<?php bloginfo("name"); ?>"
                            class="logo-small">
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'  => 'nav-collapse collapse navbar-inverse-collapse',
                    'menu_class' => 'nav navbar-nav',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>
                    </div>
                    <?php  if($slug != '') {  ?>
                    <div class="ctn-select-lang">
                        <a href="<?php echo get_site_url( 1 )."/country-select/" ?>">
                            <img src="<?= get_template_directory_uri() ?>/inc/assets/img/world-icon.svg" class="img-responsive"><span class="text-uppercase"><?= substr(getSiteSlug(),0,5) ?></span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
        <?php
        if($slug != '') {
        ?>
        <div class="search-bar">
            <?php
            get_template_part( 'searchform' );
            ?>
        </div>
        <?php } ?>
    </header>
    <?php endif ?>
