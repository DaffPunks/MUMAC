<?php
/**
 * Template Name: Agenda-Lab-Edu
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-agenda-lab-edu', get_template_directory_uri() . '/inc/css/agenda-lab-edu.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="agenda-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">Edu & Lab</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="hide-on-mobile page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/edu-lab-top-img.jpg" alt="" class="page-top__img">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="lab-edu__main-block">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <a href="" class="lab-edu__link lab-edu__link__active">Scuole</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <a href="" class="lab-edu__link">UNIVERSITà</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <a href="" class="lab-edu__link">FAMIGLIE</a>
                            </div>
                        </div>
                    </div>
                    <div class="row lab-edu__main-content">
                        <div class="col-md-12">
                            <div class="col-md-7">
                                <img src="<?= get_template_directory_uri(); ?>/images/chidren_drawing.jpg" alt="" class="lab-edu__img">
                            </div>
                            <div class="col-md-5">
                                <h2 class="lab-edu__header">Lorem ipsum amor</h2>
                                <p class="lab-edu__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                </p>
                                <a href="" class="lab-edu__download"></a>
                            </div>
                        </div>
                    </div>
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