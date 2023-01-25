<?php
/**
 * Template Name: Country Select Url
 */

get_header();
?>
<section class="country-select text-center">
    <div class="container">
        <!--div class="row">
            <div class="col-xs-12">
                <h1>Professional care for your home</h1>
            </div>
            <div class="col-xs-12">
                <h2>Please select your country</h2>
            </div>
            <div class="col-xs-12 col-sm-4 item">
                <a href="<?php echo home_url( '/international' ); ?>" rel="international">
                    <img class="img-responsive" src="<?= get_template_directory_uri() ?>/inc/assets/img/worldwide.svg" alt="International">
                </a>
                <a href="<?php echo home_url( '/international' ); ?>" class="cta blue" rel="international">WORLDWIDE</a>
            </div>
            <div class="col-xs-12 col-sm-4 item">
                <a href="<?php echo home_url( '/gb' ); ?>" rel="gb">
                    <img class="img-responsive" src="<?= get_template_directory_uri() ?>/inc/assets/img/gb.svg" alt="United Kingdom">
                </a>
                <a href="<?php echo home_url( '/gb' ); ?>" class="cta blue" rel="gb">UK</a>
            </div>
            <div class="col-xs-12 col-sm-4 item">
                <a href="<?php echo home_url( '/it' ); ?>" rel="it">
                    <img class="img-responsive" src="<?= get_template_directory_uri() ?>/inc/assets/img/it.svg" alt="Italy">
                </a>
                <a href="<?php echo home_url( '/it' ); ?>" class="cta blue" rel="it">ITALY</a>
            </div>
        </div-->
        <div class="row">
            <div class="col-xs-12">
                <h1>Professional care for your home</h1>
            </div>
            <div class="col-xs-12">
                <h2>Please select your country</h2>
            </div>
            <!--
            <div class="col-xs-12 col-sm-6 item">
                <a href="<?php echo home_url( '/international' ); ?>" rel="international">
                    <img class="img-responsive" src="<?= get_template_directory_uri() ?>/inc/assets/img/worldwide.svg" alt="International">
                </a>
                <a href="<?php echo home_url( '/international' ); ?>" class="cta blue" rel="international">WORLDWIDE</a>
            </div>
            -->
            <div class="col-xs-12 col-sm-12 item">
                <img class="img-responsive" src="<?= get_template_directory_uri() ?>/inc/assets/img/worldwide.png" alt="Select Country">
                <!--a href="<?php echo home_url( '/gb' ); ?>" rel="gb">

                </a-->
                <!--a href="<?php echo home_url( '/gb' ); ?>" class="cta blue" rel="gb">UK</a-->
                <select name="country" id="country" class="cta blue">
                    <option disabled selected value> Select Country </option>
                    <option value="<?php echo home_url( '/international' ); ?>" rel="it">WORLDWIDE</option>
                    <option value="<?php echo home_url( '/it' ); ?>" rel="it">Italy</option>
                    <option value="<?php echo home_url( '/gb' ); ?>" rel="gb">United Kingdom</option>
                    <option value="<?php echo home_url( '/es' ); ?>" rel="es">Spain</option>
                    <option value="<?php echo home_url( '/fr' ); ?>" rel="fr">France</option>
                    <option value="<?php echo home_url( '/de' ); ?>" rel="de">Germany</option>
                    <option value="<?php echo home_url( '/ch-it' ); ?>" rel="ch-it">Switzerland - Italian Language</option>
                    <option value="<?php echo home_url( '/ch-fr' ); ?>" rel="ch-fr">Switzerland - French Language</option>
                    <option value="<?php echo home_url( '/ch-de' ); ?>" rel="ch-de">Switzerland - German Language</option>
                    <option value="<?php echo home_url( '/cz' ); ?>" rel="cz">Czech Republic</option>
                    <option value="<?php echo home_url( '/pt' ); ?>" rel="pt">Portugal</option>
                    <option value="<?php echo home_url( '/be-fr' ); ?>" rel="be-fr">Benelux - French Language</option>
                    <option value="<?php echo home_url( '/be-nl' ); ?>" rel="be-nl">Benelux - Dutch Language</option>
                    <option value="<?php echo home_url( '/gr' ); ?>" rel="gr">Greece</option>
                    <option value="<?php echo home_url( '/tr' ); ?>" rel="tr">Turkey</option>
                    <option value="<?php echo home_url( '/pl' ); ?>" rel="pl">Poland</option>
                    <option value="<?php echo home_url( '/ru' ); ?>" rel="ru">Russia</option>
                </select>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
