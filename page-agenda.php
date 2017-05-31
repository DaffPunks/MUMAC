<?php
/**
 * Template Name: Agenda
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-agenda', get_template_directory_uri() . '/inc/css/agenda.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="agenda-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">Mostre & eventi</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/mumac-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="eventi container-fluid">
        <div class="row">

            <div class="eventi__event col-md-8">
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

            <div class="eventi__event col-md-3 col-md-offset-1">
                <a href="#">
                    <div class="eventi__event__img-block">
                        <div class="eventi__event__img__bottom-block">
                            <span>EDU</span> Prenota Ora
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="eventi__event__img-block">
                        <div class="eventi__event__img__bottom-block">
                            <span>EDU</span> Prenota Ora
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="eventi__event__img-block">
                        <div class="eventi__event__img__bottom-block">
                            <span>EDU</span> Prenota Ora
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="eventi">
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
    </div>


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

</div>


<?php get_footer(); ?>