<?php
    //Compresión
    if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
    else ob_start();

    //Importación
    require '../funciones/funcionesHTML.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180678631-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-180678631-1');
    </script>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="language" content="es_ES"/>
	<meta name="distribution" content="global"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta property="og:title"         content="La última partida"/>
    <meta property="og:description"   content="Las últimas noticias en tecnología y videojuegos en español"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:url"           content="https://www.laultimapartida.com"/>
	<meta property="og:image"         content="../iconos/icono.png"/>
	<meta property="og:site_name"     content="La última partida"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@laultimapartid1"/>
    <meta name="twitter:creator"      content="@laultimapartid1"/>
    <meta name="twitter:title" 		  content="La última partida"/>
    <meta name="twitter:description"  content="Las últimas noticias en tecnología y videojuegos en español"/>
    <meta name="twitter:image" 		  content="../iconos/logo.svg"/>
    <meta name="theme-color" content="#FFF1B5"/>
    <meta name="msapplication-TileColor" content="#FFF1B5"/>
    <meta name="title" 		 content="La última partida"/>
    <meta name="keywords" 	 content="contacto,informacion, La última partida, pc, ps4, xbox, one, ps5, xbox, series, x"/>
    <meta name="description" content="Información de contacto de laultimapartida.com tu página con las últimas noticias en tecnología y videojuegos en español"/>
    <meta name="robots" 	 content="all"/>
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="32x32" type="image/svg+xml">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="120x120">
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="96x96" type="image/svg+xml">
	<title>La última partida</title>
<?php
    function isMobileDevice() { 
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
    |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
    , $_SERVER["HTTP_USER_AGENT"]); 
    }

    if(isMobileDevice()){ 
        //VERSIÓN MOVIL
        ?>
        <link rel="stylesheet" href="/css/generalMovil.css"/>
        <link rel="stylesheet" href="/css/cssMovil/cabeceraMovil.css"/>
        <link rel="stylesheet" href="/css/cssMovil/articuloMovil.css"/>
        <link rel="stylesheet" href="/css/cssMovil/pieMovil.css"/>
        <script data-ad-client="ca-pub-4558441627790372" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        </head>
        <body>
        <?php
        cabecera();
        ?>
        <br><br><br>
        <?php
        contenido();
        ?>
        <?php
        anuncioMovil3();
        pie();
    ?>
    <?php
    } 
    else {
        //VERSIÓN ESCRITORIO
        ?>
        <link rel="stylesheet" href="/css/generalEscritorio.css"/>
        <link rel="stylesheet" media="only screen and (min-device-width:1001px)" href="/css/cssEscritorio/cabeceraEscritorio.css"/>
        <link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="/css/cssEscritorio/cabeceraEscritorioLite.css"/>
        <link rel="stylesheet" href="/css/cssEscritorio/articuloEscritorio.css"/>
        <link rel="stylesheet" href="/css/cssEscritorio/pieEscritorio.css"/>
        <script data-ad-client="ca-pub-4558441627790372" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
        </head>
        <body>
        <?php
        cabecera();
        ?>
        <div class="contenido">
            <section>
                <?php
                anunciosEscritorioLadoArticulo();
                ?>
            </section>
            <?php
            contenido();
            anuncioEscritorioInferiorArticulo();
            ?>
        </div>
        <?php
        pie();
    }

    function contenido(){?>
        <article id="articulo">
            <h1>Contacto</h1>
            <br><br>
            <div id="texto">
                <p>En la última partida estaremos encantados de que nos hagas llegar tus sugerencias, ideas o quejas a 
                <a href="laultimapartida.com">laultimapartida.com</a></p>
                <br>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="¡CSS Válido!" />
                    </a>
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
                    <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" />
                    </a>
                </p>
                <br><br>
                <hr>
                <br>
                <p>Correo: <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a></p>
            </div>
        </article>
    <?php
    }
?>   
    <!-- Twitter universal website tag code -->
    <script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init','o4tcc');
    twq('track','PageView');
    </script>
    <!-- End Twitter universal website tag code -->
</body>
</html>