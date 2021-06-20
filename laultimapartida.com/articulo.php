<?php
    //---------------------------------Compresión---------------------------
    if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
    else ob_start();

    //--------------------------------Importación---------------------------

    /*Aunque aquí solo se usan funciones de funcionesBD.php, 
    al importar las versiones en estas si se usan funciones de funcionesHTML.php
    y funcionesHTML.php ya importa funcionesBD.php*/

    require 'funciones/funcionesHTML.php';

    //-------------------------------Variables url--------------------------
    $sec=$_REQUEST['sec'];
    $id=$_REQUEST['id'];
    
    //Necesito pedir los datos del articulo para rellenar las etiquetas meta
    $articulo=articulo($id);

    //Articulo
    if($reg=mysqli_fetch_array($articulo)){
        $id=$reg['id'];
        $fecha=$reg['fecha'];
        //Fecha para las meta
        $fechaMeta=str_replace(' ','T',$fecha);
        $fechaMeta.='+00:00';
        /*Fecha formateada en españa para los articulos
        ya que el servidor está en ut 0 y españa es utc+2*/
        $fecha=strtotime($fecha);
        //$fecha+=3600; //+7200
        $fecha=date('d/m/Y - H:i', $fecha);
        //Resto de variables
        $titulo=$reg['titulo'];
        $tituloLink=preg_replace('/\s+/', '_', $titulo);
        $sinopsis=$reg['sinopsis'];
        $texto=$reg['texto'];
        $imagen=$reg['imagen'];
        $alt_imagen=$reg['alt_imagen'];
        $apartado=$reg['apartado'];
        $id_apartado=$reg['id_apartado'];
        $video=$reg['video'];
        $palabras_clave=$reg['palabras_clave'];
    }
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
    <meta property="og:title"         content="<?=$titulo?>"/>
    <meta property="og:description"   content="<?=$sinopsis?>"/>
    <meta property="og:type"          content="article"/>
    <meta property="og:url"           content="https://www.laultimapartida.com/Portada/<?=$id?>/<?=$tituloLink?>"/>
    <meta property="og:image"         content="https://www.laultimapartida.com/calidadArticulo/<?=$imagen?>_0.webp"/>
    <meta property="og:site_name"     content="La última partida"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@laultimapartid1"/>
    <meta name="twitter:creator"      content="@laultimapartid1"/>
    <meta name="twitter:title"        content="<?=$titulo?>"/>
    <meta name="twitter:description"  content="<?=$sinopsis?>"/>
    <meta name="twitter:image"        content="https://www.laultimapartida.com/calidadArticulo/<?=$imagen?>_0.webp"/>
    <meta name="theme-color"             content="#FF6624"/>
    <meta name="msapplication-TileColor" content="#FF6624"/>
    <meta name="title"       content="<?=$titulo?>"/>
    <meta name="keywords"    content="<?=$palabras_clave?>"/>
    <meta name="description" content="<?=$sinopsis?>"/>
    <meta name="robots"      content="follow, all"/>
    <meta name="dc.language" CONTENT="ES">
    <meta name="dc.source" CONTENT="https://www.laultimapartida.com/<?=$id?>/<?=$tituloLink?>">
    <meta name="dc.relation" CONTENT="https://www.laultimapartida.com/">
    <meta name="dc.title" CONTENT="<?=$titulo?>">
    <meta name="dc.keywords" CONTENT="<?=$palabras_clave?>">
    <meta name="dc.subject" CONTENT="<?=$titulo?>">
    <meta name="dc.description" CONTENT="<?=$sinopsis?>">
    <meta name="news_keywords" content="<?=$palabras_clave?>">
    <meta property="article:section" content="<?=$apartado?>"/>
    <meta property="article:published_time" content="<?=$fechaMeta?>"/>
    <meta property="article:modified_time" content="<?=$fechaMeta?>"/>
    <meta http-equiv="cache-control" content="no-cache" />
    <!--Favicons-->
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="32x32" type="image/svg+xml">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="120x120">
    <link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="96x96" type="image/svg+xml">
    <!------------>
    <link rel="canonical" href="https://www.laultimapartida.com/Portada/<?=$id?>/<?=$tituloLink?>"/>
    <script src="/js/funciones.js"></script>
    <title><?=$titulo?></title>
<?php
    function isMobileDevice() { 
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
    |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
    , $_SERVER["HTTP_USER_AGENT"]); 
    }

    if(isMobileDevice()){ 
        require 'versiones/articulo_mov.php';
    } 
    else { 
        require 'versiones/articulo_esc.php';
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