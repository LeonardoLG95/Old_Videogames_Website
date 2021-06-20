<?php
    //---------------------------------Compresión---------------------------
    if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
    else ob_start();
    //----------------Descripción dependiendo y keywords desde donde se entre----------
    if(isset($_REQUEST['sec'])){
        $sec=$_REQUEST['sec'];
        if($sec=='t'){
            $description="tecnología, hardware en PC y Portátiles";
            $keywords="tecnología,hardware,PC,Portátiles,Procesadores,AMD,Intel,TarjetasGráficas,Nvidia";
        }
        elseif($sec=='s'){
            $description="los juegos y videoconsolas de (PS4) Play Station 4 y (PS5) Play Station 5";
            $keywords="juegos,videojuegos,Sony,PS4,PlayStation4,PS5,PlayStation5";
        }
        elseif($sec=='n'){
            $description="los juegos y videoconsolas de Nintendo Switch";
            $keywords="juegos,videojuegos,Nintendo,Switch,NintendoSwitch";
        }
        elseif($sec=='x'){
            $description="los juegos y videoconsolas de Microsoft, Xbox One, Xbox Series X, Xbox Series S";
            $keywords="juegos,videojuegos,Microsoft,XboxOne,XboxSeriesX,XboxSeriesS";
        }
        else{
            $description=" tecnología, videojuegos y videoconsolas PS4, PS5, Nintendo Switch, PC, XboxOne, XboxSeriesX, XboxSeriesS";
            $keywords="tecnología,hardware,PC,Portátiles,Procesadores,AMD,Intel,TarjetasGráficas,Nvidia,juegos,videojuegos,Sony,PS4,PlayStation4,PS5,PlayStation5,Nintendo,Switch,NintendoSwitch,Microsoft,XboxOne,XboxSeriesX,XboxSeriesS";
        }
    }
    else{
        $description=" tecnología, videojuegos y videoconsolas PS4, PS5, Nintendo Switch, PC, XboxOne, XboxSeriesX, XboxSeriesS";
        $keywords="tecnología,hardware,PC,Portátiles,Procesadores,AMD,Intel,TarjetasGráficas,Nvidia,juegos,videojuegos,Sony,PS4,PlayStation4,PS5,PlayStation5,Nintendo,Switch,NintendoSwitch,Microsoft,XboxOne,XboxSeriesX,XboxSeriesS";
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
<meta property="og:title"         content="La última partida"/>
<meta property="og:description"   content="En laultimapartida.com encontraras las últimas noticias sobre <?=$description?>"/>
<meta property="og:type"          content="website"/>
<meta property="og:url"           content="https://www.laultimapartida.com"/>
<meta property="og:image"         content="/iconos/icono.png"/>
<meta property="og:site_name"     content="La última partida"/>
<meta name="twitter:card"         content="summary_large_image"/>
<meta name="twitter:site"         content="@laultimapartid1"/>
<meta name="twitter:creator"      content="@laultimapartid1"/>
<meta name="twitter:title" 		  content="La última partida"/>
<meta name="twitter:description"  content="En laultimapartida.com encontraras las últimas noticias sobre <?=$description?>"/>
<meta name="twitter:image" 		  	 content="/iconos/logo.svg"/>
<meta name="theme-color" 		  	 content="#FF6624"/>
<meta name="msapplication-TileColor" content="#FF6624"/>
<meta name="title" 		 content="La última partida"/>
<meta name="keywords" 	 content="La última partida, laultimapartida.com,noticias,actualidad,ultima,<?=$keywords?>"/>
<meta name="description" content="En laultimapartida.com encontraras las últimas noticias sobre <?=$description?>"/>
<meta name="robots" 	 content="follow, all"/>
<meta name="dc.language" CONTENT="ES">
<meta name="dc.source" CONTENT="https://www.laultimapartida.com">
<meta name="dc.relation" CONTENT="https://www.laultimapartida.com">
<meta name="dc.title" CONTENT="La última partida">
<meta name="dc.keywords" CONTENT="La última partida, laultimapartida.com,noticias,actualidad,ultima,<?=$keywords?>">
<meta name="dc.subject" CONTENT="En laultimapartida.com encontraras las últimas noticias sobre <?=$description?>">
<meta name="dc.description" CONTENT="En laultimapartida.com encontraras las últimas noticias sobre <?=$description?>">
<meta name="news_keywords" content="La última partida, laultimapartida.com,noticias,actualidad,ultima,<?=$keywords?>">
<meta http-equiv="cache-control" content="no-cache" />
<link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="32x32" type="image/svg+xml">
<link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="152x152">
<link rel="apple-touch-icon-precomposed" href="https://laultimapartida.com/iconos/icono.svg" type="image/svg+xml" sizes="120x120">
<link rel="icon" href="https://laultimapartida.com/iconos/icono.svg" sizes="96x96" type="image/svg+xml">
<link rel="canonical" href="https://www.laultimapartida.com"/>
<script src="/js/funciones.js"></script>
<title>La última partida</title>
<?php
    function isMobileDevice() { 
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
    |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
    , $_SERVER["HTTP_USER_AGENT"]); 
    }

    if(isMobileDevice()){ 
        require 'versiones/index_mov.php';
    } 
    else { 
        require 'versiones/index_esc.php';
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