<?php
/**
 * Template Name: Location Page
 */

show_admin_bar(false);

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}

function gwc_enqueue_styles()
{
    wp_enqueue_style('location', get_template_directory_uri() . '/inc/css/location.css');
}

add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');


get_header();
?>

<section class="head">
    <div class="head-title">
        Location
    </div>
    <div class="head-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing.
        elit sed do. eiusmod tempor incididunt ut labore et.
    </div>
</section>

<section class="map">
    <div class="container">
        <div class="row">
            <div class="col-md-2 map-left">
                <div class="map-left-floor">
                    <div class="floor-1">Ground Floor</div>
                    <div class="floor-2">first floor</div>
                </div>
                <div class="map-left-title">
                    <div class="left-title-1">Interactive Map</div>
                    <div class="left-title-2">Explore exhibitions, find amenities  and plan your route.</div>
                </div>
                <div class="map-menu">
                    <a class="map-menu-link" href="/">
                        <div>Hall</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leggi-red.png">
                    </a>
                    <a class="map-menu-link" href="/">
                        <div>Reception</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leggi-red.png">
                    </a>
                    <a class="map-menu-link" href="/">
                        <div>Caffetteria</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leggi-red.png">
                    </a>
                    <a class="map-menu-link" href="/">
                        <div>Sala temporanea</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leggi-red.png">
                    </a>
                    <a class="map-menu-link" href="/">
                        <div>Training centre</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/leggi-red.png">
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1 map-right">
                <div class="map-right-button"><a href="/">Contattaci!</a></div>
            </div>
        </div>
    </div>
</section>

<section class="case">
    <div class="container">
        <div class="mappage-title">
            Case History
        </div>
        <div class="row">
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 case-wrap">
                <a href="">
                    <div class="case-block" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/location-case.jpg')">
                        <div class="case-text">
                            LOREM IPSUM
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="stay-tuned__block">
    <h2 class="stay-tuned__header">
        Stay tuned
    </h2>
    <form action="">
        <input type="email" class="stay-tuned__email" placeholder="latuaemail@mail.com">
        <div>
            <input type="checkbox" class="stay-tuned__checkbox" id="checkbox" />
            <label for="checkbox"><a href="/">policy</a></label>
        </div>
        <button type="submit" class="stay-tuned__button">
            Invia
        </button>
    </form>
</section>




<?php
get_footer();
?>
<style>
    html {
        margin-top: 0 !important;
    }
</style>
