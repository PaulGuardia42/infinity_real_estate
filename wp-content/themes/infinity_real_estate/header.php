<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Paul Guardia Design</title>

    <link rel="icon" type="image/png" href="" sizes="32x32"/>
    <?php wp_head() ?>

    <!-- SEO -->
    <meta name="description" content="PGD"/>
    <meta name="keywords" content="Design, Programming, Development"/>
    <meta name="author" content="Paul Guardia" />

    <!-- Stop Chrome pre-load transition firing bug -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded",function(){
            let node = document.querySelector('.preload-transitions');
            node.classList.remove('preload-transitions');
        });
        document.addEventListener("wpcf7mailsent", function(event){
            location = '<?php echo get_template_directory_uri() . "/submitted" ?>'
        }, false);
    </script>
</head>
<body>

