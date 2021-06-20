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
    <meta property="og:description"   content="Política de cookies de laultimapartida.com, tu página web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:url"           content="https://www.laultimapartida.com"/>
	<meta property="og:image"         content="../iconos/icono.png"/>
	<meta property="og:site_name"     content="La última partida"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@laultimapartid1"/>
    <meta name="twitter:creator"      content="@laultimapartid1"/>
    <meta name="twitter:title" 		  content="La última partida"/>
    <meta name="twitter:description"  content="Política de cookies de laultimapartida.com, tu página web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta name="twitter:image" 		  content="../iconos/logo.svg"/>
    <meta name="theme-color" content="#FFF1B5"/>
    <meta name="msapplication-TileColor" content="#FFF1B5"/>
    <meta name="title" 		 content="La última partida"/>
    <meta name="keywords" 	 content="politica, política, política de cookies, cookies, informacion, La última partida,laultimapartida.com"/>
    <meta name="description" content="Política de cookies de La última partida"/>
    <meta name="robots" 	 content="all"/>
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="32x32" type="image/svg+xml">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="120x120">
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="96x96" type="image/svg+xml">
	<title>Política de cookies de La última partida</title>
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
            <h1>Política de Cookies</h1>
            <br><br>
            <div id="texto">
                En esta web se utilizan cookies de terceros y propias para conseguir que tengas una mejor experiencia de navegación, puedas compartir contenido en redes sociales y para que podamos obtener estadísticas de los usuarios.
                <br><br>
                Puedes evitar la descarga de cookies a través de la configuración de tu navegador, evitando que las cookies se almacenen en su dispositivo.
                <br><br>
                Como propietario de este sitio web, te comunico que no utilizamos ninguna información personal procedente de cookies, tan sólo realizamos estadísticas generales de visitas que no suponen ninguna información personal.
                <br><br>
                Es muy importante que leas la presente política de cookies y comprendas que, si continúas navegando, consideraremos que aceptas su uso.
                <br><br>
                Según los términos incluidos en el artículo 22.2 de la Ley 34/2002 de Servicios de la Sociedad de la Información y Comercio Electrónico, si continúas navegando, estarás prestando tu consentimiento para el empleo de los referidos mecanismos.
                <br><br>
                <h2>Entidad Responsable</h2>
                <br>
                La entidad responsable de la recogida, procesamiento y utilización de tus datos personales, en el sentido establecido por la Ley de Protección de Datos Personales es la página unamas.com, propiedad de La última partida – .
                <br><br>
                <h2>¿Qué son las cookies?</h2>
                <br>
                Las cookies son un conjunto de datos que un servidor deposita en el navegador del usuario para recoger la información de registro estándar de Internet y la información del comportamiento de los visitantes en un sitio web. Es decir, se trata de pequeños archivos de texto que quedan almacenados en el disco duro del ordenador y que sirven para identificar al usuario cuando se conecta nuevamente al sitio web. Su objetivo es registrar la visita del usuario y guardar cierta información. Su uso es común y frecuente en la web ya que permite a las páginas funcionar de manera más eficiente y conseguir una mayor personalización y análisis sobre el comportamiento del usuario.
                <br><br>
                <h2>¿Qué tipos de cookies existen?</h2>
                <br>
                Las cookies utilizadas en nuestro sitio web, son de sesión y de terceros, y nos permiten almacenar y acceder a información relativa al idioma, el tipo de navegador utilizado, y otras características generales predefinidas por el usuario, así como, seguir y analizar la actividad que lleva a cabo, con el objeto de introducir mejoras y prestar nuestros servicios de una manera más eficiente y personalizada.
                <br><br>
                Las cookies, en función de su permanencia, pueden dividirse en cookies de sesión o permanentes. Las que expiran cuando el usuario cierra el navegador. Las que expiran en función de cuando se cumpla el objetivo para el que sirven (por ejemplo, para que el usuario se mantenga identificado en los servicios de La última partida) o bien cuando se borran manualmente.
                <br><br>
                <table style="float: left; max-width: 100%;">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Caducidad</th>
                        <th>Finalidad</th>
                        <th>Clase</th>
                    </tr>
                    <tr>
                        <td>__utma</td>
                        <td>De Terceros (Google Analytics)</td>
                        <td>2 años</td>
                        <td>Se usa para distinguir usuarios y sesiones</td>
                        <td>No Exenta</td>
                    </tr>
                    <tr>
                        <td>__utmb</td>
                        <td>De Terceros (Google Analytics)</td>
                        <td>30 minutos</td>
                        <td>Se usa para determinar nuevas sesiones o visitas</td>
                        <td>No Exenta</td>
                    </tr>
                    <tr>
                        <td>__utmc</td>
                        <td>De Terceros (Google Analytics)</td>
                        <td>Al finalizar la sesión</td>
                        <td>Se configura para su uso con Urchin</td>
                        <td>No Exenta</td>
                    </tr>
                    <tr>
                        <td>__utmz</td>
                        <td>De Terceros (Google Analytics)</td>
                        <td>6 meses</td>
                        <td>Almacena el origen o la campaña que explica cómo el usuario ha llegado hasta la página web</td>
                        <td>No Exenta</td>
                    </tr>
                </table>	 	
                <br>
                Adicionalmente, en función de su objetivo, las cookies pueden clasificarse de la siguiente forma:
                <br><br>
                <h2>Cookies de rendimiento</h2>
                <br>
                Este tipo de Cookie recuerda sus preferencias para las herramientas que se encuentran en los servicios, por lo que no tiene que volver a configurar el servicio cada vez que usted visita. A modo de ejemplo, en esta tipología se incluyen: Ajustes de volumen de reproductores de vídeo o sonido. Las velocidades de transmisión de vídeo que sean compatibles con su navegador. Los objetos guardados en el “carrito de la compra” en los servicios de e-commerce tales como tiendas.
                <br><br>
                <h2>Cookies de geo-localización</h2>
                <br>
                Estas cookies son utilizadas para averiguar en qué país se encuentra cuando se solicita un servicio. Esta cookie es totalmente anónima, y sólo se utiliza para ayudar a orientar el contenido a su ubicación.
                <br><br>
                <h2>Cookies de registro</h2>
                <br><br>
                Las cookies de registro se generan una vez que el usuario se ha registrado o posteriormente ha abierto su sesión, y se utilizan para identificarle en los servicios con los siguientes objetivos:
                <br><br>
                Mantener al usuario identificado de forma que, si cierra un servicio, el navegador o el ordenador y en otro momento u otro día vuelve a entrar en dicho servicio, seguirá identificado, facilitando así su navegación sin tener que volver a identificarse. Esta funcionalidad se puede suprimir si el usuario pulsa la funcionalidad [cerrar sesión], de forma que esta cookie se elimina y la próxima vez que entre en el servicio el usuario tendrá que iniciar sesión para estar identificado.
                <br><br>
                Comprobar si el usuario está autorizado para acceder a ciertos servicios, por ejemplo, para participar en un concurso.
                <br><br>
                Adicionalmente, algunos servicios pueden utilizar conectores con redes sociales tales como Facebook o Twitter. Cuando el usuario se registra en un servicio con credenciales de una red social, autoriza a la red social a guardar una Cookie persistente que recuerda su identidad y le garantiza acceso a los servicios hasta que expira. El usuario puede borrar esta Cookie y revocar el acceso a los servicios mediante redes sociales actualizando sus preferencias en la red social que específica.
                <br><br>
                <h2>Cookies de analíticas</h2>
                <br>
                Cada vez que un usuario visita un servicio, una herramienta de un proveedor externo genera una cookie analítica en el ordenador del usuario. Esta cookie que sólo se genera en la visita, servirá en próximas visitas a los servicios de La última partida para identificar de forma anónima al visitante. Los objetivos principales que se persiguen son:
                <br><br>
                Permitir la identificación anónima de los usuarios navegantes a través de la cookie (identifica navegadores y dispositivos, no personas) y por lo tanto la contabilización aproximada del número de visitantes y su tendencia en el tiempo.
                Identificar de forma anónima los contenidos más visitados y por lo tanto más atractivos para los usuarios Saber si el usuario que está accediendo es nuevo o repite visita.
                <br><br>
                Importante: Salvo que el usuario decida registrarse en un servicio de La última partida, la cookie nunca irá asociada a ningún dato de carácter personal que pueda identificarle. Dichas cookies sólo serán utilizadas con propósitos estadísticos que ayuden a la optimización de la experiencia de los usuarios en el sitio.
                <br><br>
                <h2>Cookies de publicidad</h2>
                <br><br>
                Este tipo de cookies permiten ampliar la información de los anuncios mostrados a cada usuario anónimo en los servicios de La última partida. Entre otros, se almacena la duración o frecuencia de visualización de posiciones publicitarias, la interacción con las mismas, o los patrones de navegación y/o comportamientos del usuario ya que ayudan a conformar un perfil de interés publicitario. De este modo, permiten ofrecer publicidad afín a los intereses del usuario.
                <br><br>
                <h2>Cookies publicitarias de terceros</h2>
                <br>
                Además de la publicidad gestionada por las webs de La última partida en sus servicios, las webs de La última partida ofrecen a sus anunciantes la opción de servir anuncios a través de terceros (“Ad-Servers”). De este modo, estos terceros pueden almacenar cookies enviadas desde los servicios de La última partida procedentes de los navegadores de los usuarios, así como acceder a los datos que en ellas se guardan.
                <br><br>
                Las empresas que generan estas cookies tienen sus propias políticas de privacidad. En la actualidad, las webs de La última partida utilizan la plataforma Doubleclick (Google) para gestionar estos servicios. Para más información, acuda a
                <br><br>
                <a href="https://www.google.es/policies/privacy/ads/#toc-doubleclick">https://www.google.es/policies/privacy/ads/#toc-doubleclick</a> y a <a href="https://www.google.es/policies/privacy/ads/">https://www.google.es/policies/privacy/ads/</a>.
                <br><br>
                <h2>¿Cómo puedo deshabilitar las cookies en mi navegador?</h2>
                <br>
                Se pueden configurar los diferentes navegadores para avisar al usuario de la recepción de cookies y, si se desea, impedir su instalación en el equipo. Asimismo, el usuario puede revisar en su navegador qué cookies tiene instaladas y cuál es el plazo de caducidad de las mismas, pudiendo eliminarlas.
                <br><br>
                Para ampliar esta información consulte las instrucciones y manuales de su navegador:
                <br><br>
                Para más información sobre la administración de las cookies en Google Chrome: <a href="https://support.google.com/chrome/answer/95647?hl=es">https://support.google.com/chrome/answer/95647?hl=es</a>
                <br><br>
                Para más información sobre la administración de las cookies en Internet Explorer: <a href="https://windows.microsoft.com/es-es/windows-vista/cookies-frequently-asked-questions">https://windows.microsoft.com/es-es/windows-vista/cookies-frequently-asked-questions</a>
                <br><br>
                Para más información sobre la administración de las cookies en Mozilla Firefox: <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we">https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a>
                <br><br>
                Para más información sobre la administración de las cookies en Safari: <a href="https://www.apple.com/es/privacy/use-of-cookies/">https://www.apple.com/es/privacy/use-of-cookies/</a>
                <br><br>
                Para más información sobre la administración de las cookies en Opera: <a href="https://help.opera.com/Windows/11.50/es-ES/cookies.html">https://help.opera.com/Windows/11.50/es-ES/cookies.html</a>
                <br><br>
                Si desea dejar de ser seguido por Google Analytics visite: <a href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a>
                <br><br>
                <h2>Para saber más sobre las cookies</h2>
                <br>
                Puede obtener más información sobre la publicidad online basada en el comportamiento y la privacidad online en el siguiente enlace: <a href="https://www.youronlinechoices.com/es/">https://www.youronlinechoices.com/es/</a>
                <br><br>
                Protección de datos de Google Analytics: <a href="https://www.google.com/analytics/learn/privacy.html">https://www.google.com/analytics/learn/privacy.html</a>
                <br><br>
                Cómo usa Google Analytics las cookies: <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es#analyticsjs">https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es#analyticsjs</a>
                <br><br>
                <h2>Actualizaciones y cambios en la política de privacidad/cookies</h2>
                <br>
                Las webs de La última partida pueden modificar esta Política de Cookies en función de exigencias legislativas, reglamentarias, o con la finalidad de adaptar dicha política a las instrucciones dictadas por la Agencia Española de Protección de Datos, por ello se aconseja a los usuarios que la visiten periódicamente.
                <br><br>
                Cuando se produzcan cambios significativos en esta Política de Cookies, estos se comunicarán a los usuarios bien mediante la web o a través de correo electrónico a los usuarios registrados.
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