<!-- <div class="footer">
    <div class="footer__container maxwidth">
        <p>( c ) 2016 &ndash; 2022 </p>
    </div>
</div> -->
<script type="text/javascript">
    
    document.addEventListener("wpcf7mailsent", function(event){
        location = '<?php echo get_template_directory_uri() . "/submitted" ?>'
    }, false);
    
    if ( document.URL.includes("<?php echo get_site_url() . "/sign-up-form/" ?>") ) {
        const badge = document.querySelectorAll("div");
            console.log(badge);
        
        //   badge.classList.add('showgr');
    }
</script>
    <?php wp_footer(); ?>
</body>
</html>