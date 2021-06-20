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
    <meta property="og:description"   content="Información legal sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:url"           content="https://www.laultimapartida.com"/>
	<meta property="og:image"         content="../iconos/logo.svg"/>
	<meta property="og:site_name"     content="La última partida"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@laultimapartid1"/>
    <meta name="twitter:creator"      content="@laultimapartid1"/>
    <meta name="twitter:title" 		  content="La última partida"/>
    <meta name="twitter:description"  content="Información legal sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
    <meta name="twitter:image" 		  content="../iconos/icono.png"/>
    <meta name="theme-color" content="#FFF1B5"/>
    <meta name="msapplication-TileColor" content="#FFF1B5"/>
    <meta name="title" 		 content="La última partida"/>
    <meta name="keywords" 	 content="informacion, información, información legal, informacion legal, legal, La última partida"/>
    <meta name="description" content="Información legal sobre La última partida, tu web con las últimas noticias en tecnología y videojuegos en español"/>
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
            <h1>Aviso legal y términos de uso</h1>
            <br><br>
            <div id="texto">
                En este espacio, el USUARIO, podrá encontrar toda la información relativa a los términos y condiciones legales 
                que definen las relaciones entre los usuarios y nosotros como responsables de esta web. Como usuario, 
                es importante que conozcas estos términos antes de continuar tu navegación. La última partida.Como responsable de esta web, 
                asume el compromiso de procesar la información de nuestros usuarios y clientes con plenas garantías y cumplir 
                con los requisitos nacionales y europeos que regulan la recopilación y uso de los datos personales de nuestros usuarios. 
                Esta web, por tanto, cumple rigurosamente con el RGPD (REGLAMENTO (UE) 2016/679 de protección de datos) 
                y la LSSI-CE la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico.
                <br><br>
                <h2>CONDICIONES GENERALES DE USO</h2>
                <br>
                Las presentes Condiciones Generales regulan el uso (incluyendo el mero acceso) de las páginas de la web, 
                integrantes del sitio web de <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> incluidos los contenidos y servicios puestos a disposición en ellas. 
                Toda persona que acceda a la web, <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> (“Usuario”) acepta someterse a las Condiciones Generales vigentes 
                en cada momento del portal <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>.
                <br><br>
                <h2>DATOS PERSONALES QUE RECABAMOS Y CÓMO LO HACEMOS</h2>
                <br>
                Leer la <a href="https://laultimapartida.com/Privacidad">Política de Privacidad</a>.
                <br><br>
                <h2>COMPROMISOS Y OBLIGACIONES DE LOS USUARIOS</h2>
                <br>
                El Usuario queda informado, y acepta, que el acceso a la presente web no supone, en modo alguno, el inicio de una relación 
                comercial con <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>. De esta forma, el usuario se compromete a utilizar el sitio Web, sus servicios y contenidos 
                sin contravenir la legislación vigente, la buena fe y el orden público.
                Queda prohibido el uso de la web, con fines ilícitos o lesivos, o que, de cualquier forma, puedan causar perjuicio o 
                impedir el normal funcionamiento del sitio web. Respecto de los contenidos de esta web, se prohíbe:Su reproducción, 
                distribución o modificación, total o parcial, a menos que se cuente con la autorización de sus legítimos titulares; Cualquier 
                vulneración de los derechos del prestador o de los legítimos titulares;Su utilización para fines comerciales o publicitarios.
                <br><br>
                En la utilización de la web, <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>, el Usuario se compromete a no llevar a cabo ninguna conducta que pudiera dañar 
                la imagen, los intereses y los derechos de <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> o de terceros o que pudiera dañar, 
                inutilizar o sobrecargar el portal (indicar dominio) o que impidiera, de cualquier forma, la normal utilización de la web. 
                No obstante, el Usuario debe ser consciente de que las medidas de seguridad de los sistemas informáticos en Internet no son 
                enteramente fiables y que, por tanto <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> no puede garantizar la inexistencia de virus u otros elementos que puedan 
                producir alteraciones en los sistemas informáticos (software y hardware) del Usuario o en sus documentos electrónicos y ficheros 
                contenidos en los mismos.
                <br><br>
                <h2>MEDIDAS DE SEGURIDAD</h2>
                <br>
                Los datos personales comunicados por el usuario a <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> pueden ser almacenados en bases de datos automatizadas o no, 
                cuya titularidad corresponde en exclusiva a <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>, asumiendo ésta todas las medidas de índole técnica, organizativa 
                y de seguridad que garantizan la confidencialidad, integridad y calidad de la información contenida en las mismas de acuerdo 
                con lo establecido en la normativa vigente en protección de datos.
                La comunicación entre los usuarios y <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> utiliza un canal seguro, y los datos transmitidos son cifrados gracias a 
                protocolos a https, por tanto, garantizamos las mejores condiciones de seguridad para que la confidencialidad de los usuarios 
                esté garantizada.
                <br><br>
                <h2>RECLAMACIONES</h2>
                <br>
                <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> informa que existen hojas de reclamación a disposición de usuarios y clientes. El Usuario podrá realizar 
                reclamaciones solicitando su hoja de reclamación o remitiendo un correo electrónico a <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a> indicando su nombre 
                y apellidos, el servicio y/o producto adquirido y exponiendo los motivos de su reclamación.
                <br><br>
                El usuario podrá notificarnos la reclamación, bien a través de correo electrónico a: <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a>, si lo desea adjuntando 
                el siguiente formulario de reclamación: El servicio/producto: Adquirido el día: Nombre del usuario: Domicilio del usuario: 
                Firma del usuario (solo si se presenta en papel): Fecha: Motivo de la reclamación:
                <br><br>
                <h2>PLATAFORMA DE RESOLUCIÓN DE CONFLICTOS</h2>
                <br>
                Por si puede ser de tu interés, para someter tus reclamaciones puedes utilizar también la plataforma de resolución de litigios 
                que facilita la Comisión Europea y que se encuentra disponible en el siguiente enlace: <a href="https://ec.europa.eu/consumers/odr/">https://ec.europa.eu/consumers/odr/</a>.
                <br><br>
                <h2>DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL</h2>
                <br>
                En virtud de lo dispuesto en los artículos 8 y 32.1, párrafo segundo, de la Ley de Propiedad Intelectual, quedan expresamente 
                prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la 
                totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, 
                sin la autorización de <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>. El usuario se compromete a respetar los derechos de Propiedad Intelectual e Industrial 
                titularidad de <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>.
                El usuario conoce y acepta que la totalidad del sitio web, conteniendo sin carácter exhaustivo el texto, software, contenidos 
                (incluyendo estructura, selección, ordenación y presentación de los mismos) podcast, fotografías, material audiovisual y gráficos, 
                está protegida por marcas, derechos de autor y otros derechos legítimos, de acuerdo con los tratados internacionales en los que 
                España es parte y otros derechos de propiedad y leyes de España. En el caso de que un usuario o un tercero consideren que se ha 
                producido una violación de sus legítimos derechos de propiedad intelectual por la introducción de un determinado contenido en la web, 
                deberá notificar dicha circunstancia a <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> indicando:
                <br><br>
                Datos personales del interesado titular de los derechos presuntamente infringidos, o indicar la representación con la que actúa 
                en caso de que la reclamación la presente un tercero distinto del interesado.
                Señalar los contenidos protegidos por los derechos de propiedad intelectual y su ubicación en la web, la acreditación de los 
                derechos de propiedad intelectual señalados y declaración expresa en la que el interesado se responsabiliza de la veracidad de las 
                informaciones facilitadas en la notificación.
                <br><br>
                <h2>ENLACES EXTERNOS</h2>
                <br>
                Las páginas de la web <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>, podría proporcionar enlaces a otros sitios web propios y contenidos que son propiedad de terceros. 
                El único objeto de los enlaces es proporcionar al Usuario la posibilidad de acceder a dichos enlaces. <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> no se responsabiliza 
                en ningún caso de los resultados que puedan derivarse al Usuario por acceso a dichos enlaces.
                Asimismo, el usuario encontrará dentro de este sitio, páginas, promociones, programas de afiliados que acceden a los hábitos de navegación 
                de los usuarios para establecer perfiles. Esta información siempre es anónima y no se identifica al usuario.
                <br><br>
                La Información que se proporcione en estos Sitios patrocinado o enlaces de afiliados está sujeta a las políticas de privacidad que se 
                utilicen en dichos Sitios y no estará sujeta a esta política de privacidad. Por lo que recomendamos ampliamente a los Usuarios a revisar 
                detalladamente las políticas de privacidad de los enlaces de afiliado.
                El Usuario que se proponga establecer cualquier dispositivo técnico de enlace desde su sitio web al portal <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> deberá obtener 
                la autorización previa y escrita de <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> El establecimiento del enlace no implica en ningún caso la existencia de relaciones 
                entre <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> y el propietario del sitio en el que se establezca el enlace, ni la aceptación o aprobación por parte de 
                <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> de sus contenidos o servicios.
                <br><br>
                <h2>POLÍTICA DE COMENTARIOS</h2>
                <br>
                En nuestra web y se permiten realizar comentarios para enriquecer los contenidos y realizar consultas. No se admitirán comentarios 
                que no estén relacionados con la temática de esta web, que incluyan difamaciones, agravios, insultos, ataques personales o 
                faltas de respeto en general hacia el autor o hacia otros miembros. También serán suprimidos los comentarios que contengan 
                información que sea obviamente engañosa o falsa, así como los comentarios que contengan información personal, como, por 
                ejemplo, domicilios privado o teléfonos y que vulneren nuestra política de protección de datos.
                Se desestimará, igualmente, aquellos comentarios creados sólo con fines promocionales de una web, persona o colectivo y 
                todo lo que pueda ser considerado spam en general.
                No se permiten comentarios anónimos, así como aquellos realizados por una misma persona con distintos apodos. No se 
                considerarán tampoco aquellos comentarios que intenten forzar un debate o una toma de postura por otro usuario.
                <br><br>
                <h2>EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD</h2>
                <br>
                El Prestador no otorga ninguna garantía ni se hace responsable, en ningún caso, de los daños y perjuicios de cualquier 
                naturaleza que pudieran traer causa de:
                <br><br>
                    La falta de disponibilidad, mantenimiento y efectivo funcionamiento de la web, o de sus servicios y contenidos;
                    La existencia de virus, programas maliciosos o lesivos en los contenidos;<br>
                    El uso ilícito, negligente, fraudulento o contrario a este Aviso Legal;<br>
                    La falta de licitud, calidad, fiabilidad, utilidad y disponibilidad de los servicios prestados por terceros y puestos 
                    a disposición de los usuarios en el sitio web.<br>
                    El prestador no se hace responsable bajo ningún concepto de los daños que pudieran dimanar del uso ilegal o indebido 
                    de la presente página web.
                <br><br>
                <h2>LEY APLICABLE Y JURISDICCIÓN</h2>
                <br>
                Con carácter general las relaciones entre <a href="https://laultimapartida.com/">https://laultimapartida.com/</a> con los Usuarios de sus servicios telemáticos, presentes en esta 
                web se encuentran sometidas a la legislación y jurisdicción españolas y a los tribunales.
                <br><br>
                <h2>CONTACTO</h2>
                <br>
                En caso de que cualquier Usuario tuviese alguna duda acerca de estas Condiciones legales o cualquier comentario sobre el 
                portal <a href="https://laultimapartida.com/">https://laultimapartida.com/</a>, por favor diríjase a <a href="mailto:eslaultimapartida@gmail.com">eslaultimapartida@gmail.com</a>.
                <br><br>
                De parte del equipo que formamos La última partida te agradecemos el tiempo dedicado en leer este Aviso Legal.
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