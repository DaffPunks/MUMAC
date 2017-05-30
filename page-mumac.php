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

<div class="container-fluid">

    <div class="page-top full-height-screen__img mumac-top__img">
        <h1 class="page-top__header">Mumac</h1>
        <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
        elit sed do. eiusmod tempor incididunt ut labore et</p>
        <a href="#" class="page-top__link">Scopri</a>
    </div>

    <div class="mumac-main">
        <div class="col-md-3">
            <h3 class="mumac-main__header"></h3>
            <div class="mumac-main__text"></div>
            <div class="mumac-main__link"></div>
            <div class="mumac-main__arrows"></div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <img src="" alt="" class="mumac-main__img">
        </div>
    </div>

    <div class="mumac-eventi">
        <h2 class="mumac-eventi__header"></h2>
        <div class="mumac-eventi__events-block">
            <div class="mumac-eventi__event">
                <img src="" alt="" class="mumac-eventi__event__img">
                <h3 class="mumac-eventi__event__header"></h3>
                <p class="mumac-eventi__event__description"></p>
            </div>
        </div>
    </div>


    <div class="stay-tuned__block">
        <h2 class="stay-tuned__header"></h2>
        <form action="">
            <input type="email" class="stay-tuned__email">
            <input type="checkbox" class="stay-tuned__checkbox">
            <button class="stay-tuned__button"></button>
        </form>
    </div>

</div>


<?php get_footer(); ?>