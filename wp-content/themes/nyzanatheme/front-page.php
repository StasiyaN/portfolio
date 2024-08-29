<?php get_header();?>

<main id="site-content">
    	<div class="banner">
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/banner_neu.jpg';?>" alt="banniere du site">
			<h1 class="banner-header">Développement WordPress</h1>
		
		</div>
	
	

	<div class="front-page-content">
		
	<?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}
	?>
	</div>

		<div class="social">
			<?php get_template_part( 'template-parts/social-media');?>
		</div>




</main><!-- #site-content -->



<?php get_footer();
