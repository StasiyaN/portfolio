<?php get_header(); ?>

<main id="site-content">


       



	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/project-content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->


<?php
get_footer();
