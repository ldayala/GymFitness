<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<? echo get_template_directory_uri() ?>/img/logo.svg" alt="" srcset="">
            </div>
            <?php 
            $arg=array(
                'theme_location'=>'menu_principal',
                'container'=>'nav',  //contenedor del menu html
                'container_class'=>'menu_principal' //calse que queremos que tenga el menu
            );
            wp_nav_menu($arg);
            ?>
        </div>
    </header>
    <?php
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile
    ?>
</body>

</html>