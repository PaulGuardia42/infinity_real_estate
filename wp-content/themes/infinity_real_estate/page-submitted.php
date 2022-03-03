<?php get_header('front'); ?>

<div class="success-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/transparent_infinity_logo_1.png" alt="MLS Logo">
    <?php 
        while(have_posts()): the_post(); ?>
        <h1><?php the_title();?></h1>
       <?php  the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>