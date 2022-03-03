<?php get_header('front'); ?>

<div class="form-container">
    
    <?php 
        while(have_posts()): the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>