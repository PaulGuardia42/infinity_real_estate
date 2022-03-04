<!-- <div class="footer">
    <div class="footer__container maxwidth">
        <p>( c ) 2016 &ndash; 2022 </p>
    </div>
</div> -->
<script type="text/javascript">
    
    document.addEventListener("wpcf7mailsent", function(event){
        location = '<?php echo get_template_directory_uri() . "/submitted" ?>'
    }, false);
    

</script>
    <?php wp_footer(); ?>
</body>
</html>