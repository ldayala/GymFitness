<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="contenedor barra-navegacion">
            <div class="logo">
        <img src="<? echo get_template_directory_uri()?>/img/logo.svg" alt="" srcset="">
            </div>
            <nav>
                <a href="/Nosotros">Nosotros</a>
                <a href="/Contacto">Contacto</a>
                <a href="/Blog">Blog</a>
            </nav>
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