<?php
/**
 * Template Name: Agenda-Dettaglio
 */

function gwc_enqueue_scripts()
{
    //wp_enqueue_script('slick.min', get_template_directory_uri() . '/public/js/slick.min.js', false, false, false);

}
function gwc_enqueue_styles()
{
    wp_enqueue_style('style-agenda-dettaglio', get_template_directory_uri() . '/inc/css/mumac-dettaglio.css');
}
add_action('wp_enqueue_scripts', 'gwc_enqueue_scripts');
add_action('wp_enqueue_scripts', 'gwc_enqueue_styles');



get_header();
?>

<div class="mumac-page">

    <div class="top-block-img">
        <img src="<?= get_template_directory_uri(); ?>/images/coffee-concerto-top-img.jpg" alt="" class="top-block-img__img">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="row">

                    <div class="col-xs-12">
                        <div class="mumac-main__text-block">
                            <h3 class="mumac-main__header__white">
                                28 aprile ore 21:15
                            </h3>
                            <h2 class="mumac-main__header">
                                Cafè Concerto
                            </h2>
                            <h4 class="mumac-main__header__small">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea 
                                <!-- share -->
                                <a href="#share" class="mumac-main__header__share__left"></a>
                            </h4>
                            <p class="mumac-main__text__left">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 mumac-main__img-block__right">
                        <img src="<?= get_template_directory_uri(); ?>/images/notes-coffee.jpg" alt="" class="mumac-main__img">
                    </div>

                    <div class="col-xs-12">
                        <div class="mumac-main__text-block">
                            <p class="mumac-main__text__left">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="mumac-main__img__small__wrapper">
                                    <img src="<?= get_template_directory_uri(); ?>/images/books-coffee-table.jpg" alt="" class="mumac-main__img__small">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="mumac-main__text-block">
                            <p class="mumac-main__text__left">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <div class="row">

                    <div class="col-xs-12 coffee__vertical">
                        <h2 class="coffee__header">
                            we love coffee
                        </h2>
                    </div>

                    <div class="coffee__event col-xs-12">
                        <a href="#">
                            <div class="coffee__event__img-block">
                                <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                            </div>
                        </a>
                        <p class="coffee__event__description">
                            12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                        </p>
                    </div>

                    <div class="coffee__event col-xs-12">
                        <a href="#">
                            <div class="coffee__event__img-block">
                                <img src="<?= get_template_directory_uri(); ?>/images/coffee-default.jpg" alt="" class="coffee__event__img">
                            </div>
                        </a>
                        <p class="coffee__event__description">
                            12 maggio 2017  - Lorem Ipsum amor sin hic e hoc pollus.
                        </p>
                    </div>

                    <div class="coffee__event col-xs-12">
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