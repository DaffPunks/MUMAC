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
        <div class="page-top__text-block">
            <h1 class="page-top__header">Mumac</h1>
            <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
            elit sed do. eiusmod tempor incididunt ut labore et</p>
            <a href="#" class="page-top__link">Scopri</a>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/mumac-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="mumac-main">
        <div class="col-md-3">
            <h3 class="mumac-main__header">
                Lorem 
                ipsum amor
                ipsum amor amor
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
        <div class="col-md-8 col-md-offset-1">
            <img src="<?= get_template_directory_uri(); ?>/images/mumac-logo-big.png" alt="" class="mumac-main__img">
        </div>
    </div>

    <div class="mumac-eventi">
        <h2 class="mumac-eventi__header">
            Eventi
        </h2>
        <div class="mumac-eventi__events-block">
            <div class="mumac-eventi__event">
                <img src="<?= get_template_directory_uri(); ?>/images/mumac-logo-big.png" alt="" class="mumac-eventi__event__img">
                <h3 class="mumac-eventi__event__header">
                    Evento MUMAC
                </h3>
                <p class="mumac-eventi__event__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusm od tempor incididunt ut labore et dolore.
                </p>
            </div>
        </div>
    </div>


    <div class="stay-tuned__block">
        <h2 class="stay-tuned__header">
            Stay tuned
        </h2>
        <form action="">
            <input type="email" class="stay-tuned__email">
            <input type="checkbox" class="stay-tuned__checkbox">
            <a href="" class="stay-tuned__policy"></a>
            <button type="submit" class="stay-tuned__button">
                Invia
            </button>
        </form>
    </div>

</div>


<?php get_footer(); ?>