<?php get_header('front'); ?>

<div class="form-container">
    
    <?php 
        while(have_posts()): the_post();
        the_content();
    endwhile;
    ?>
    <div class="recaptcha-text">
        <p>This site is protected by reCAPTCHA and the Google
        <a href="https://policies.google.com/privacy">Privacy Policy</a> and
        <a href="https://policies.google.com/terms">Terms of Service</a> apply.
        </p>
    </div>
</div>

<?php get_footer(); ?>