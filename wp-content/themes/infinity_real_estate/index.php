<?php get_header('front'); ?>

<main class="main-container">
    <div class="title_wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/transparent_infinity_logo_1.png" alt="MLS Logo">
        <h1 class="header">Infinity Real Estate Group</h1>
        <h2 class="sub-header">Where the possibilities are endless</h2>
        <a href="<?php echo get_template_directory_uri() . "/sign-up-form" ?>"><div class="button">What's my home worth?</div></a>
        
    </div>
    <div class="partners_wrapper">
        <div class="partners_title">
            <div class="line"></div>
                <p>Partners</p>
            <div class="line"></div>
        </div>
        <div class="partners_logos">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mls_reversed_1.png" alt="MLS Logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/REALTOR_R_White_1.png" alt="REALTOR Logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/eXp_canada_White_1.png" alt="EXP Logo">
        </div>
    </div>
</main>

<?php get_footer(); ?>