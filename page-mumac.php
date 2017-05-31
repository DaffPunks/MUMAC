<?php
/**
 * Template Name: Mumac
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-mumac', get_template_directory_uri() . '/inc/css/mumac.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="mumac-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">MUMAC</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="hide-on-mobile page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/mumac-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="mumac-main row">
        <div class="col-md-3">
            <div class="mumac-main__text-block">
                <h3 class="mumac-main__header">
                    Lorem 
                    ipsum amor
                    ipsum amor amor
                    <!-- share -->
                    <a href="#share" class="mumac-main__header__share"></a>
                </h3>
                <p class="mumac-main__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
                </p>
                <a href="#" class="mumac-main__link">
                    Leggi di più
                </a>
                <div class="mumac-main__arrows">
                    <a href="" class="mumac-main__arrow mumac-main__arrow__left"></a>
                    <a href="" class="mumac-main__arrow mumac-main__arrow__right"></a>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 mumac-main__img-block">
            <img src="<?= get_template_directory_uri(); ?>/images/mumac-house.jpg" alt="" class="mumac-main__img">
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