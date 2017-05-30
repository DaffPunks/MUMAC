<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rootstrap
 */
?>
<?php do_action( 'rootstrap_content_end' ); ?>
	</div><!-- #content -->
<?php do_action( 'rootstrap_footer_before' ); ?>

	<div id="footer-area">
	<?php do_action( 'rootstrap_footer_start' ); ?>
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>
        
            <div class="container hide-on-smartphone" style="padding-top:20px;padding-bottom:20px;border-bottom:1px solid #900000">
              <div class="row">
                <div class="col-md-2 col-sm-2 text-right"><img src="<?=get_template_directory_uri()?>/images/mumac-logo-white.png" alt="Mumac"></div>
                <div class="col-md-5 col-sm-5"><br /><img src="<?=get_template_directory_uri()?>/images/mumac-sponsored-by.png" alt="Sponsored by: La Cimbali - Faema"></div>
                <div class="col-md-5 col-sm-5"><br /><br /><?php rootstrap_social(); ?></div>
              </div>
            </div>
            <div class="container show-on-smartphone" style="padding-top:20px;padding-bottom:20px;background:transparent url('<?=get_template_directory_uri()?>/images/stripes.png') no-repeat left 20px;background-size:8% 80%">
              <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-3 text-right"><img src="<?=get_template_directory_uri()?>/images/mumac-logo-white.png" alt="Mumac"></div>
                <div class="col-xs-7"><br /><img src="<?=get_template_directory_uri()?>/images/mumac-sponsored-by.png" alt="Sponsored by: La Cimbali - Faema"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-12"><br /><br /><?php rootstrap_social(); ?></div>
              </div>
            </div>
            <div class="container hide-on-mobile">
              <div class="row" style="background:transparent url('<?=get_template_directory_uri()?>/images/stripes.png') no-repeat -52px 15px;padding-bottom:20px;">
                <div class="col-md-2"></div>
                <div role="navigation" class="col-md-10">
                    <?php rootstrap_footer_links(); ?>
                </div>
              </div>
            </div>
        
        <footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="copyright">
					<?php echo rootstrap_get_option( 'custom_footer_text', 'rootstrap' ); ?>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
	<?php do_action( 'rootstrap_footer_end' ); ?>
</div><!-- #page -->
<?php do_action( 'rootstrap_footer_after' ); ?>
<?php do_action( 'rootstrap_body_end' ); ?>
<?php wp_footer(); ?>

</body>
</html>