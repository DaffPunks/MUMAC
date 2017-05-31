<?php
/**
 * Template Name: Mumac-Partnership
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-mumac-partnership', get_template_directory_uri() . '/inc/css/mumac-partnership.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="mumac-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">Collaboration</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="hide-on-mobile page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/mumac-partnersip-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="mumac-main row">
        <div class="col-md-4 mumac-main__img-block">
            <img src="<?= get_template_directory_uri(); ?>/images/museo-bycicles.jpg" alt="" class="mumac-main__img">
        </div>
        <div class="col-md-7 col-md-offset-1">
            <div class="mumac-main__text-block__left">
                <h3 class="mumac-main__header__left">
                    MUSA
                    Museo Salterio Officina del Gusto e del Paesaggio
                    <!-- share -->
                    <a href="#share" class="mumac-main__header__share__left"></a>
                </h3>
                <p class="mumac-main__text__left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
                </p>
            </div>
        </div>
    </div>

    <div class="mumac-main row">
        <div class="col-md-7">
            <div class="mumac-main__text-block">
                <h3 class="mumac-main__header">
                    Museu do cafè 
                    di santos
                    <!-- share -->
                    <a href="#share" class="mumac-main__header__share"></a>
                </h3>
                <p class="mumac-main__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
                </p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1 col-md-offset-1 mumac-main__img-block__right">
            <img src="<?= get_template_directory_uri(); ?>/images/museo-house.jpg" alt="" class="mumac-main__img">
        </div>
    </div>

    <div class="mumac-main row">
        <div class="col-md-4 mumac-main__img-block">
            <img src="<?= get_template_directory_uri(); ?>/images/museo-ghisallo.jpg" alt="" class="mumac-main__img">
        </div>
        <div class="col-md-7 col-md-offset-1">
            <div class="mumac-main__text-block__left">
                <h3 class="mumac-main__header__left">
                    Museo del ciclismo 
                    del Ghisallo
                    <!-- share -->
                    <a href="#share" class="mumac-main__header__share__left"></a>
                </h3>
                <p class="mumac-main__text__left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore.
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat...
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