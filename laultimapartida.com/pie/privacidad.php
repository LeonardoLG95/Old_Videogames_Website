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
    <meta property="og:description"   content="Política de privacidad sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:url"           content="https://www.laultimapartida.com"/>
	<meta property="og:image"         content="../iconos/icono.png"/>
	<meta property="og:site_name"     content="La última partida"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@laultimapartid1"/>
    <meta name="twitter:creator"      content="@laultimapartid1"/>
    <meta name="twitter:title" 		  content="La última partida"/>
    <meta name="twitter:description"  content="Política de privacidad sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta name="twitter:image" 		  content="../iconos/logo.svg"/>
    <meta name="theme-color" content="#FFF1B5"/>
    <meta name="msapplication-TileColor" content="#FFF1B5"/>
    <meta name="title" 		 content="La última partida"/>
    <meta name="keywords" 	 content="politica, política, política privacidad, privacidad, informacion, La última partida"/>
    <meta name="description" content="Política de privacidad sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
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
            <h1>Privacidad</h1>
            <br><br>
            <div id="texto">
                <h2>Responsable – ¿quién es el responsable del tratamiento de los datos?</h2>
                <br>
                <b>Identidad:</b> La última partida<br>
                <b>Correo Electrónico:</b> <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a><br>
                <b>Nombre del dominio:</b> <a href="https://laultimapartida.com">https://laultimapartida.com</a>
                <br><br>
                <h2>Finalidades – ¿con qué finalidades tratamos tus datos?</h2>
                <br>
                En cumplimiento de lo dispuesto en el Reglamento Europeo 2016/679 General de Protección de Datos, te informamos de que trataremos los datos que nos facilitas para:
                <br>
                <ul>
                    <li>
                        Gestionar la contratación de servicios que realice a través de la Plataforma, así como la facturación 
                        y entrega correspondiente.
                    </li>
                    <li>
                        Remitir periódicamente comunicaciones sobre servicios, eventos y noticias relacionadas con las actividades 
                        desarrolladas por , por cualquier medio (teléfono, correo postal o email), salvo que se indique lo contrario 
                        o el usuario se oponga o revoque su consentimiento.
                    </li>
                    <li>Remitir información comercial y / o promocional relacionada con el sector de servicios contratados y valor 
                        añadido para usuarios finales, salvo que se indique lo contrario o el usuario se oponga o revoque su consentimiento.
                    </li>
                    <li>
                        Dar cumplimiento a las obligaciones legalmente establecidas, así como verificar el cumplimiento de las 
                        obligaciones contractuales, incluía la prevención de fraude.
                    </li>
                    <li>
                        Cesión de datos a organismos y autoridades, siempre y cuando sean requeridos de conformidad con las disposiciones 
                        legales y reglamentarias.
                    </li>
                </ul>
                <br>
                <h2>Categorías de datos – ¿Qué datos tratamos?</h2>
                <br>
                Derivada de las finalidades antes mencionadas, en gestionamos las siguientes categorías de datos:
                <ul>
                    <li>Datos identificativos</li>
                    <li>Metadatos de comunicaciones electrónicas</li>
                    <li>Datos de información comercial. En caso de que el usuario facilite datos de terceros, 
                        manifiesta contar con el consentimiento de estos y se compromete a trasladarle la información 
                        contenida en esta cláusula, eximiendo a de cualquier responsabilidad en este sentido.
                    </li>
                    <li>
                        No obstante, podrá llevar a cabo las verificaciones para constatar este hecho, adoptando las medidas 
                        de diligencia debida que correspondan, conforme a la normativa de protección de datos.
                    </li>
                </ul>
                <br>
                <h2>Legitimación – ¿cuál es la legitimación para el tratamiento de tus datos?</h2>
                <br>
                El tratamiento de datos cuyo fin es el envío de boletines periódicos (newslettering) sobre servicios, eventos y noticias relacionadas con nuestra actividad profesional se basa en el consentimiento del interesado, solicitado expresamente para llevar a cabo dichos tratamientos, de acuerdo con la normativa vigente.
                Además, la legitimación para el tratamiento de los datos relacionados con ofertas o colaboraciones se basan en el consentimiento del usuario que remite sus datos, que puede retirar en cualquier momento, si bien ello puede afectar a la posible comunicación de forma fluida y obstrucción de procesos que desea realizar.
                Por último, los datos se podrán utilizar para dar cumplimiento a las obligaciones legales aplicables a La última partida.
                <br><br>
                <h2>Plazo de Conservación de los Datos – ¿Por cuánto tiempo conservaremos tus datos?</h2>
                <br>
                La última partida conservará los datos personales de los usuarios únicamente durante el tiempo necesario para la realización de las finalidades para las que fueron recogidos, mientras no revoque los consentimientos otorgados. Posteriormente, en caso de ser necesario, mantendrá la información bloqueada durante los plazos legalmente establecidos.
                <br><br>
                <h2>Destinatarios ¿A qué destinatarios se comunicarán tus datos?</h2>
                <br>
                Tus datos podrán ser accedidos por aquellos proveedores que prestan servicios a , tales como servicios de alojamiento, herramientas de marketing y sistemas de contenido u otros profesionales, cuando dicha comunicación sea necesaria normativamente, o para la ejecución de los servicios contratados.
                <br><br>
                La última partida, ha suscrito los correspondientes contratos de encargo de tratamiento con cada uno de los proveedores que prestan servicios a , con el objetivo de garantizar que dichos proveedores tratarán tus datos de conformidad con lo establecido en la legislación vigente.
                <br><br>
                También podrán ser cedidos a las Fuerzas y Cuerpos de Seguridad del Estado en los casos que exista una obligación legal.
                <br><br>
                Bancos y entidades financieras, para el cobro de los servicios.
                Administraciones públicas con competencia en los sectores de actividad, cuando así lo establezca la normativa vigente.
                <br><br>
                <h2>Seguridad de la Información – ¿Qué medidas de seguridad implantamos para cuidar sus datos?</h2>
                <br>
                Para proteger las diferentes tipologías de datos reflejados en esta política de privacidad llevará a cabo las medidas de seguridad técnicas necesarias para evitar su pérdida, manipulación, difusión o alteración.
                <br><br>
                <ul>
                    <li>Encriptación de las comunicaciones entre el dispositivo del usuario y los servidores de La última partida</li>
                    <li>Encriptación de la información en los propios servidores de</li>
                    <li>Otras medidas que eviten el acceso a los datos del usuario por parte de terceros.</li>
                    <li>En aquellos casos en los que cuente con prestadores de servicio para el mantenimiento de la plataforma que se encuentren fuera de la Unión Europea, estas trasferencias internacionales se hayan regularizadas atendiendo al compromiso de con la protección, integridad y seguridad de los datos personales de los usuarios.</li>
                </ul>
                <br>
                <h2>Derechos – ¿Cuáles son tus derechos cuando nos facilitas tus datos y cómo puedes ejercerlos?</h2>
                <br>
                Tienes derecho a obtener confirmación sobre si en estamos tratando datos personales que te conciernan, o no.
                Asimismo, tienes derecho a acceder a tus datos personales, así como a solicitar la rectificación de los datos inexactos o, en su caso, solicitar su supresión cuando, entre otros motivos, los datos ya no sean necesarios para los fines que fueron recogidos.
                <br><br>
                En determinadas circunstancias, podrás solicitar la limitación del tratamiento de tus datos, en cuyo caso únicamente los conservaremos para el ejercicio o la defensa de reclamaciones.
                En determinadas circunstancias y por motivos relacionados con tu situación particular, podrás oponerte al tratamiento de tus datos. dejará de tratar los datos, salvo por motivos legítimos imperiosos, o el ejercicio o la defensa de posibles reclamaciones.
                <br><br>
                Asimismo, puedes ejercer el derecho a la portabilidad de los datos, así como retirar los consentimientos facilitados en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.
                <br><br>
                Si deseas hacer uso de cualquiera de tus derechos puede dirigirse a <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a>.
                <br><br>
                Por último, te informamos que puedes dirigirte ante la Agencia Española de Protección de Datos y demás organismos públicos competentes para cualquier reclamación derivada del tratamiento de tus datos personales.
                <br><br>
                <h2>Modificación de la política de privacidad</h2>
                <br>
                La última partida podrá modificar la presente Política de Privacidad en cualquier momento, siendo publicadas las sucesivas versiones en el Sitio Web. En cualquier caso, comunicará con previo aviso las modificaciones de la presente política que afecten a los usuarios a fin de que puedan aceptar las mismas.
                <br><br>
                La presente Política de Privacidad se encuentra actualizada a fecha 27/12/2018 (España). Reservados todos los derechos.
                <br><br>
                Si lo deseas también puedes consultar nuestra <a href="https://laultimapartida.com/Cookies">Política de Cookies</a>.
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