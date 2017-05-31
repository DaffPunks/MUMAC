<?php
/**
 * Template Name: Contatti
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}

function gwc_enqueue_styles()
{
    wp_enqueue_style('asdasd', get_template_directory_uri() . '/inc/css/contatti.css');
}

add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');


get_header();
?>

<section class="head">
    <div class="head-title">
        Contatti
    </div>
    <div class="head-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing.
        elit sed do. eiusmod tempor incididunt ut labore et.
    </div>
</section>

<section class="map">
    <div class="container">
        <div class="row">
            <div id="map" style="width: 100%; height: 590px"></div>
            <div class="map-title">
                DOVE SIAMO?
            </div>
            <div class="map-info">
                <div class="map-info-1">
                    Via Pablo Neruda N’2<br>
                    20082 Binasco (MI) Italy
                </div>
                <div class="map-info-2">
                    Accesso gratuito per visite autonome con audioguida
                    APP MUMAC, disponibile in 10 lingue.
                </div>
                <div class="map-info-2">
                    Visite guidate per gruppi
                    a pagamento.<br>
                    Per prenotazioni inviare una mail di richiesta a <span class="b">mumac@gruppocimbali.com</span>,
                    oppure <span class="b-ul">iscriviti alla newsletter</span>.
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        var uluru = {lat: 45.336027, lng: 9.0949631};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false,
            scrollwheel: false,
            styles: [{
                    "elementType": "geometry",
                    "stylers": [{"visibility": "simplified"}, {"hue": "#ff0000"}]
                }, {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "on"}]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#e89393"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#cccccc"
                        }
                    ]
                },
                    {
                    "featureType": "transit.station",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "on"}]
                }, {"featureType": "poi", "stylers": [{"visibility": "on"}]}, {
                    "featureType": "administrative",
                    "stylers": [{"visibility": "simplified"}]
                }, {"featureType": "water", "stylers": [{"visibility": "on"}]}]
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbKSf736EToN9grxRKSb1g80OqL19Xp_A&callback=initMap"></script>

<?php get_footer(); ?>
