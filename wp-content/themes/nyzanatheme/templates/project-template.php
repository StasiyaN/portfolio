<?php
/* Template Name: Project Template 
* Template Post Type: post, project
*/

get_header(); 
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<h2 class = "project-heading"><?php the_title();?></h2>
<div class="content-block">
   

    <div class="photo-block">
        <div class="project-photo">
            <?php
            // Check if the post has a featured image
            if ( has_post_thumbnail() ) :
                // Output the featured image
                the_post_thumbnail('full', array('class' => 'featured-image'));
            endif;
            ?>
        </div>
            <div class="btn-block">
                <?php
                    // Display content from Gutenberg blocks
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
            </div>
    </div><!-- .photo-block -->

                <div class="mission-skills-block">
                        <div class="mission-block">
                            <h2 class="mission">Mission</h2>
                                <div class="text-block">
                                    <?php
                                        // Display content for Mission block using ACF
                                        $mission_content = get_field('missions');
                                        if ($mission_content) {
                                            echo wpautop($mission_content); // Apply automatic paragraph formatting
                                        } else {
                                            echo '<p>No mission content available.</p>';
                                        }
                                    ?>
                                </div><!-- .text-block -->
                        </div>
                       
                            <div class="competences-block">
                                <h2 class="competences">Competences</h2>
                                <div class="text-block">
                                    <?php
                                        // Display content for Competences block using ACF
                                        $competences_content = get_field('competences');
                                        if ($competences_content) {
                                            echo wpautop($competences_content); // Apply automatic paragraph formatting
                                        } else {
                                            echo '<p>No competences content available.</p>';
                                        }
                                    ?>
                                </div><!-- .text-block -->
                            </div>
                                 <!-- Project Categories Block -->
                                 <div class="categories-block">
    <?php
    $categories = get_the_terms(get_the_ID(), 'category');
    if ($categories && !is_wp_error($categories)) {
        foreach ($categories as $category) {
            // Retrieve the image URL for the current category
            $category_image = get_field('cat-image', 'category_' . $category->term_id);

            // Determine if the field returns a URL or an array
            if (is_array($category_image) && isset($category_image['url'])) {
                $image_url = esc_url($category_image['url']);
            } elseif (is_string($category_image) && !empty($category_image)) {
                $image_url = esc_url($category_image);
            } else {
                $image_url = ''; // Fallback
            }

            // Display the image and category name
            if ($image_url) {
                echo '<div class="category-item">';
                echo '<img src="' . $image_url . '" alt="' . esc_attr($category->name) . '" class="category-image" />';
                echo '</div>';
            } else {
                // Display category name only if no image is available
                echo '<div class="category-item">';
                echo '<p>' . esc_html($category->name) . '</p>';
                echo '</div>';
            }
        }
    } else {
        echo '<p>No categories available.</p>';
    }
    ?>
</div>

                                  
                                        
                             
            </div>

    </div><!-- .content-block -->

    <div class="section-inner">
        <?php
        wp_link_pages(
            array(
                'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
                'after'       => '</nav>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            )
        );

        edit_post_link();

        // Single bottom post meta.
        twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

        if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {
            get_template_part( 'template-parts/entry-author-bio' );
        }
        ?>

    </div><!-- .section-inner -->

    <?php
    if ( is_single() ) {
        get_template_part( 'template-parts/navigation' );
    }
       ?>

</article><!-- .post -->

<div class="social">
			<?php get_template_part( 'template-parts/social-media');?>
		</div>


<?php get_footer(); ?>
