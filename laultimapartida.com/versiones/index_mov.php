<?php

//Importaciones
require 'funciones/funcionesHTML.php';

?>
    <link rel="stylesheet" href="/css/generalMovil.css"/>
    <link rel="stylesheet" href="/css/cssMovil/cabeceraMovil.css"/>
    <link rel="stylesheet" href="/css/cssMovil/indexMovil.css"/>
    <link rel="stylesheet" href="/css/cssMovil/pieMovil.css"/>
	<script data-ad-client="ca-pub-4558441627790372" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <?php
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
        cabecera($seccion);
        $impresos=listaArticulos($posicion,$seccion,true);
        paginacion($posicion,$seccion,$impresos);
        anuncioMovilInferior();
        pie();
    ?>