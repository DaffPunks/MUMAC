<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700|Playfair+Display:700" rel="stylesheet">

<!-- favicon -->

<?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" />
<?php } ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/common.css" type="text/css" media="all">

<!--[if IE]><?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->	

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //do_action( 'before' ); ?>

<div id="page" class="hfeed site">
<?php do_action( 'nav-before' ); ?>
        <div class="container">
          <div class="row">
              <aside id="sidebar-wrapper">
                  <button type="button" class="navbar-toggle">
                      <span class="sr-only">Toggle navigation</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icon_close.png">
                  </button>
                  <div class="languages show-on-smartphone"><?php do_action('wpml_add_language_selector'); ?></div>
                  <?php rootstrap_header_menu(); ?>
                  <div id="menu_times" class="hide-on-smartphone">
                    <?php dynamic_sidebar( 'menu_1' ); ?>
                  </div>
              </aside>
          </div>
        </div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
              <div class="row">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>						
					<div id="logo">
				    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if(rootstrap_get_option('logo_uploader')=='') {
						echo bloginfo( 'name' ); ?>
						<span id="site-description"><?php bloginfo( 'description' ); ?></span>
					 <?php } else { ?>
						<img src="<?php echo rootstrap_get_option('logo_uploader'); ?>" style="display:block" alt="Mumac">	
					<?php } ?>
					</a>
					</div>
		        </div>
                <div class="languages hide-on-smartphone"><?php do_action('wpml_add_language_selector'); ?></div>
              </div>
		    </div>
		</nav><!-- .site-navigation -->	
		<?php do_action( 'nav-after' ); ?>
        