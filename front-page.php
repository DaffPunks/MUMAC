<?php
    
    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

get_header('home'); ?>

<?php //rootstrap_featured_slider(); ?>
<?php rootstrap_call_for_action(); ?>

<div id="content" class="site-content container" style="margin-top:0">
  <div class="row no-gutter">
    <button type="button" class="navbar-toggle white">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <?php masterslider(1); ?>
  </div>
  <br />
  <div class="row">

	<?php do_action( 'rootstrap_post_before' ); ?>
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php do_action( 'rootstrap_post_start' ); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'rootstrap' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<?php edit_post_link( __( 'Edit', 'rootstrap' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
				</article><!-- #post-## -->

				<?php do_action( 'rootstrap_post_end' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->
  </div>
</div>

		<?php do_action( 'rootstrap_post_after' ); ?>
		<?php get_sidebar( 'home' ); ?>

<?php 
	get_footer(); 
}
?>