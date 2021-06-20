<?php

//Importaciones
require 'funciones/funcionesHTML.php';

?>
    <link rel="stylesheet" href="/css/generalEscritorio.css"/>
    <link rel="stylesheet" media="only screen and (min-device-width:1001px)" href="/css/cssEscritorio/cabeceraEscritorio.css"/>
	<link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="/css/cssEscritorio/cabeceraEscritorioLite.css"/>
    <link rel="stylesheet" href="/css/cssEscritorio/indexEscritorio.css"/>
    <link rel="stylesheet" href="/css/cssEscritorio/pieEscritorio.css"/>
	<script data-ad-client="ca-pub-4558441627790372" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <?php   //Comprobación variables, si no existen vacia y a 0
            if(isset($_REQUEST['pos'])){
                $posicion=$_REQUEST['pos'];
            }
            else{
                $posicion=0;
            }
            if(isset($_REQUEST['sec'])){
                $seccion=$_REQUEST['sec'];
            }
            else{
                $seccion='';
            }
            
            cabecera($seccion);?>
    <div class="contenido">
        <?php
            anuncioEscritorioSuperiorIndice();
            $impresos=listaArticulos($posicion,$seccion);?>
            <section>
                <?php 
                //Anuncio -> Los 5 más vistos -> Anuncio -> Suscripción email
                anunciosEscritorioLadoIndice1();
                ?>
            </section><?php
            paginacion($posicion,$seccion,$impresos);
            anuncioEscritorioInferiorIndice();
        ?>
    </div>
    <?php pie();?>