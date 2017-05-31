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

<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contatti-pin-1.png">
            </div>
            <div class="col-md-7">
                <div class="info-tabs">
                    <div class="info-tab active">In auto</div>
                    <div class="info-tab">Senz'auto</div>
                </div>
                <div class="info-inst">
                    <div class="inst-num">1.</div>
                    <div class="inst-text">Dal centro di <strong>Milano</strong> e dalle tangenziali di Milano seguire la direzione A7
                        Genova, entrare in A7 ad Assago, uscire alla prima uscita Binasco; seguire la direzione
                        Casorate/Noviglio; alla rotonda prendere la quarta uscita (per tornare indietro) quindi svoltare
                        a destra alla prima opportunità (via Manzoni, di fronte al casello dell’autostrada), quindi
                        proseguire su via Neruda.
                    </div>
                </div>
                <div class="info-inst">
                    <div class="inst-num">2.</div>
                    <div class="inst-text">Da <strong>Genova</strong>, prendere la A7 ed uscire a Binasco.</div>
                </div>
                <div class="info-inst">
                    <div class="inst-num">3.</div>
                    <div class="inst-text">Da <strong>Torino</strong> prendere la Torino-Milano (A4) proseguire per Tangenziale Ovest
                        (vedi sopra) oppure prendere la Torino-Piacenza (A21) e a Tortona proseguire sull’A7
                        Genova-Milano, uscita Binasco.
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="info-mobile">

    </div>
</section>

<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contatti-pin-2.png">
            </div>
            <div class="col-md-7">
                <div class="info-title">
                    Orari di apertura
                </div>
                <div class="info-schedule">
                    <div class="info-row">
                        <div class="info-row-1 b">lunedì chiuso</div>
                        <div class="info-row-2"></div>
                        <div class="info-row-3">-</div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1">martedì</div>
                        <div class="info-row-2">10.00 -13.00/14.30-17.00</div>
                        <div class="info-row-3"><a href="/">su prenotazione</a></div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1">mercoledi</div>
                        <div class="info-row-2">10.00 -13.00/14.30-17.00</div>
                        <div class="info-row-3"><a href="/">su prenotazione</a></div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1">giovedì</div>
                        <div class="info-row-2">10.00 -13.00/14.30-17.00</div>
                        <div class="info-row-3"><a href="/">su prenotazione</a></div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1">venerdi</div>
                        <div class="info-row-2">10.00 -13.00/14.30-17.00</div>
                        <div class="info-row-3"><a href="/">su prenotazione</a></div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1 b">sabato chiuso</div>
                        <div class="info-row-2"></div>
                        <div class="info-row-3">-</div>
                    </div>
                    <div class="info-row">
                        <div class="info-row-1">domenica</div>
                        <div class="info-row-2">14.30-17.00</div>
                        <div class="info-row-3"><a href="/">vedi agenda</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contatti-pin-3.png">
            </div>
            <div class="col-md-7">
                <div class="info-title">
                    Contatti
                </div>
                <div class="info-contacts">
                    <div>Tel: +39 02 900491 +39 02 90049362</div>
                    <div>Email: <span>mumac@gruppocimbali.com</span></div>
                    <div>Ufficio stampa: Barabino & Partners Jacopo Pedemonte <span>j.pedemonte@barabino.it</span></div>
                    <div>Ilaria Schelotto <span>l.schelotto@barabino.it</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="warn">
    <div class="warn-container">
        <div class="warn-head">
            <div class="warn-col">accessibilità</div>
            <div class="warn-col">servizi</div>
            <div class="warn-col">REGOLAMENTO DI VISITA</div>
        </div>
        <div class="warn-body">
            <div class="warn-col">
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-1.png">Accesso ai disabili</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-2.png">Fasciatoio</div>
            </div>
            <div class="warn-col">
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-3.png">Guardaroba</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-4.png">App Guida</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-9.png">Caffetteria</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-5.png">Shop</div>
            </div>
            <div class="warn-col">
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-6.png">Vietato toccare</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-7.png">Vietato fumare</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/warn-icon-8.png">Concesso fotografare</div>
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
