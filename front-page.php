<?php
show_admin_bar(false);

function gwc_enqueue_scripts()
{
    wp_enqueue_script('home', get_template_directory_uri() . '/inc/js/home.min.js', false, false, true);

}

function gwc_enqueue_styles()
{
    wp_enqueue_style('home', get_template_directory_uri() . '/inc/css/home.css');
}

add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');

get_header('home');
?>

<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="home-bg">
                    <div class="hm-menu home-menu"></div>
                    <div class="home-text">
                        <div class="home-title">
                            <div class="home-title-share"></div>
                            <div class="home-title-1">MUMAC</div>
                            <div class="home-title-2">Lorem ipsum amor lorem ipsum</div>
                        </div>
                        <div class="home-desc">
                            <div class="home-desc-block"></div>
                            <div class="home-desc-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </div>
                            <div class="home-desc-leggi">
                                <a href="/">
                                    leggi<img src="<?php echo get_template_directory_uri(); ?>/images/leggi.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 right">
                <div class="right-menu">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mumac-logo-big.png">
                    </a>
                    <div class="lang">
                        <div class="hide-on-smartphone"><?php do_action('wpml_add_language_selector'); ?></div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    </div>
                    <div class="calendar">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png">
                            <div>Prenota la tua visita</div>
                        </a>
                    </div>
                    <div class="slides">
                        <a href="/">
                            <div class="img"></div>
                            <div class="slide-text">
                                <div class="slide-text-1">MUMAC</div>
                                <div class="slide-text-2">Lorem ipsum amor lorem ipsum</div>
                            </div>
                        </a>
                        <a href="/">
                            <div class="img"></div>
                            <div class="slide-text">
                                <div class="slide-text-1">MUMAC</div>
                                <div class="slide-text-2">Lorem ipsum amor lorem ipsum</div>
                            </div>
                        </a>
                        <a href="/">
                            <div class="img"></div>
                            <div class="slide-text">
                                <div class="slide-text-1">MUMAC</div>
                                <div class="slide-text-2">Lorem ipsum amor lorem ipsum</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="eventi">
    <h2 class="eventi__header">
        Eventi
    </h2>
    <div class="eventi__events-block">

        <div class="eventi__event col-md-5">
            <a href="#">
                <div class="eventi__event__img-block">
                    <img src="<?= get_template_directory_uri(); ?>/images/eventi-default.jpg" alt="" class="eventi__event__img">
                    <div class="eventi__event__img__bottom-block">
                        <span>EDU</span> Prenota Ora
                    </div>
                </div>
            </a>
            <h3 class="eventi__event__header">
                Evento MUMAC
                <!-- share -->
                <a href="#share" class="eventi__event__header__share"></a>
            </h3>
            <p class="eventi__event__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusm od tempor incididunt ut labore et dolore.
            </p>
        </div>

        <div class="eventi__event col-md-5">
            <a href="#">
                <div class="eventi__event__img-block">
                    <img src="<?= get_template_directory_uri(); ?>/images/eventi-default.jpg" alt="" class="eventi__event__img">
                    <div class="eventi__event__img__bottom-block">
                        <span>EDU</span> Prenota Ora
                    </div>
                </div>
            </a>
            <h3 class="eventi__event__header">
                Evento MUMAC
                <!-- share -->
                <a href="#share" class="eventi__event__header__share"></a>
            </h3>
            <p class="eventi__event__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusm od tempor incididunt ut labore et dolore.
            </p>
        </div>

        <div class="eventi__event col-md-5">
            <a href="#">
                <div class="eventi__event__img-block">
                    <img src="<?= get_template_directory_uri(); ?>/images/eventi-default.jpg" alt="" class="eventi__event__img">
                    <div class="eventi__event__img__bottom-block">
                        <span>EDU</span> Prenota Ora
                    </div>
                </div>
            </a>
            <h3 class="eventi__event__header">
                Evento MUMAC
                <!-- share -->
                <a href="#share" class="eventi__event__header__share"></a>
            </h3>
            <p class="eventi__event__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusm od tempor incididunt ut labore et dolore.
            </p>
        </div>

    </div>
</section>

<section class="coffee">
    <div class="container">
        <div class="homepage-title">
            We love coffee
        </div>
        <div class="flex-sb flex-ai-end">

            <div class="coffee-col-1 flex-lg-1">
                <div class="coffee-img">
                    <div class="coffee-img-desc">
                        coffee tender
                    </div>
                </div>
                <div class="coffee-title">
                    <div>Articolo Blog</div>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/share-black.png"></a>
                </div>
                <div class="coffee-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                </div>
            </div>

            <div class="coffee-col-2 flex-lg-1">
                <div class="coffee-head">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/we3coffee.png">
                    <div class="coffee-head-text">Caffè a regola d’arte  |  gusto del caffè  |  miscela caffè  |  Coffee tender</div>
                    <div class="coffee-head-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam.</div>
                </div>
                <div class="coffee-img">
                    <div class="coffee-img-desc">
                        CAFFè A REGOLA D’ARTE
                    </div>
                </div>
                <div class="coffee-title">
                    <div>Articolo Blog</div>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/share-black.png"></a>
                </div>
                <div class="coffee-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                </div>
            </div>

        </div>
    </div>
</section>

<section class="location">
    <div class="container">
        <div class="homepage-title">
            Location
        </div>
        <div class="row">
            <div class="col-lg-6 location-img">

            </div>
            <div class="col-lg-6 location-info">
                <div class="info-pages">
                    <div class="active">01</div>
                    <div>02</div>
                    <div>03</div>
                    <div>04</div>
                </div>
                <div class="info-title">
                    <div class="info-title-text">lorem ipsum</div>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/share-black.png"></a>
                </div>
                <div class="info-desc">
                    <div class="desc-title">
                        <div class="desc-title-2">Lorem ipsum amor lorem ipsum</div>
                    </div>
                    <div class="desc-desc">
                        <div class="desc-desc-block"></div>
                        <div class="desc-desc-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                        <div class="desc-desc-leggi">
                            <a href="/">
                                Leggi di più<img src="<?php echo get_template_directory_uri(); ?>/images/leggi-black.png">
                            </a>
                        </div>
                    </div>
                </div>

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
