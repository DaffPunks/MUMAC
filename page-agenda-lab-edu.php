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

<div class="mumac-page">

    <div class="page-top">
        <div class="page-top__text-block row">
            <div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
                <h1 class="page-top__header">Edu & Lab</h1>
                <p class="page-top__description">Lorem ipsum dolor sit amet, consectetur adipisicing.
                elit sed do. eiusmod tempor incididunt ut labore et</p>
                <a href="#" class="page-top__link">Scopri</a>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/images/edu-lab-top-img.jpg" alt="" class="page-top__img">
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