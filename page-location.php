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












<?php
get_footer();
?>
<style>
    html {
        margin-top: 0 !important;
    }
</style>
