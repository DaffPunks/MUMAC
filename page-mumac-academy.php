<?php
/**
 * Template Name: Mumac-Academy
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-mumac-academy', get_template_directory_uri() . '/inc/css/mumac-academy.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="mumac-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">MUMAC Academy</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="hide-on-mobile page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/mumac-academy-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="mumac-main row">
        <div class="col-xs-12 show-on-mobile mumac__mobile-to-top">
            <div class="col-xs-12 col-md-8 col-md-offset-1 mumac-main__img-block__right">
                <img src="<?= get_template_directory_uri(); ?>/images/coffe-machine.jpg" alt="" class="mumac-main__img">
            </div>
        </div>

        <div class="show-on-mobile col-xs-10">
            <div class="col-xs-12">
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
        </div>

        <div class="hide-on-mobile col-md-3 col-xs-12">
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

        <div class="hide-on-mobile col-md-8 col-md-offset-1 mumac-main__img-block__right">
            <img src="<?= get_template_directory_uri(); ?>/images/coffe-machine.jpg" alt="" class="mumac-main__img">
        </div>
    </div>

    <div class="mumac-main row">
        <div class="col-xs-12 show-on-mobile">
            <div class="col-xs-12 mumac-main__img-block">
                <img src="<?= get_template_directory_uri(); ?>/images/coffe-automatos.jpg" alt="" class="mumac-main__img">
            </div>
        </div>

        <div class="hide-on-mobile col-md-5 col-xs-12 mumac-main__img-block">
            <img src="<?= get_template_directory_uri(); ?>/images/coffe-automatos.jpg" alt="" class="mumac-main__img">
        </div>

        <div class="hide-on-mobile col-md-6 col-md-offset-1 col-xs-12">
            <div class="mumac-main__text-block__left">
                <h3 class="mumac-main__header__left">
                    Lorem 
                    ipsum amor
                    ipsum amor amor
                    <!-- share -->
                    <a href="#share" class="mumac-main__header__share__left"></a>
                </h3>
                <p class="mumac-main__text__left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
                </p>
                <a href="#" class="mumac-main__link">
                    Leggi di più
                </a>
            </div>
        </div>

        <div class="show-on-mobile col-xs-10 col-xs-offset-2">
            <div class="col-xs-12">
                <div class="col-md-6 col-md-offset-1 col-xs-12">
                    <div class="mumac-main__text-block__left">
                        <h3 class="mumac-main__header__left">
                            Lorem 
                            ipsum amor
                            ipsum amor amor
                            <!-- share -->
                            <a href="#share" class="mumac-main__header__share__left"></a>
                        </h3>
                        <p class="mumac-main__text__left">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
                        </p>
                        <a href="#" class="mumac-main__link">
                            Leggi di più
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="coffee">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-md-12">
                    <h2 class="coffee__header">
                        we love coffee
                    </h2>
                </div>

                <div class="coffee__event col-xs-3">
                    <a href="#">
                        <div class="coffee__event__img-block">
                            <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                        </div>
                    </a>
                    <p class="coffee__event__description">
                        12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                    </p>
                </div>

                <div class="coffee__event col-xs-3">
                    <a href="#">
                        <div class="coffee__event__img-block">
                            <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                        </div>
                    </a>
                    <p class="coffee__event__description">
                        12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                    </p>
                </div>

                <div class="coffee__event col-xs-3">
                    <a href="#">
                        <div class="coffee__event__img-block">
                            <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                        </div>
                    </a>
                    <p class="coffee__event__description">
                        12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                    </p>
                </div>

                <div class="coffee__event col-xs-3">
                    <a href="#">
                        <div class="coffee__event__img-block">
                            <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                        </div>
                    </a>
                    <p class="coffee__event__description">
                        12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                    </p>
                </div>

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