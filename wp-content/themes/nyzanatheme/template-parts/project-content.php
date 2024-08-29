<div class="content-block">
<div class="text-block">

    <div class="mission">
        <h2>misson</h2>
    </div>

        <div class="competences">
            <h2> competences </h2>
        </div>

</div>
<div class="photo-block">
    <div class="project-photo">
        <?php
        // Check if the post has a featured image
        if ( has_post_thumbnail() ) :
            // Output the featured image
            the_post_thumbnail('medium', array('class' => 'featured-image'));
        endif;
        ?>
    </div>
   
</div>
    <button class="view-project">visiter le site</button>
    </div>