<?php
//header('Access-Control-Allow-Origin: *');
//header('Content-Type: text/html; charset=utf-8');
if(isset($_REQUEST['x'])){
    $contrasenaX=$_REQUEST['x'];
}
else{
    $contrasenaX='';
}
if(isset($_REQUEST['y'])){
    $contrasenaY=$_REQUEST['y'];
}
else{
    $contrasenaY='';
}
$valorX='( ͡° ͜ʖ ͡°)';
$valorY='( ͡° ͜ʖ ͡°)';
if($contrasenaX==$valorX&&$contrasenaY==$valorY){
    $alt_imagen=$_REQUEST['alt_imagen'];
    $titulo=$_REQUEST['titulo'];
    $sinopsis=$_REQUEST['sinopsis'];

    $texto='<p>'.$_REQUEST['texto'];
    $texto=preg_replace('/(\r?\n){2,}/', '</p><p>', $texto);
    $texto=preg_replace('/\n/', '<br>', $texto);
    $texto.='</p>';
    
    $apartado=$_REQUEST['apartado'];
    $video=$_REQUEST['video'];
    $palabras_clave=$_REQUEST['palabras_clave'];
    switch($apartado){
        case 'Tecnología':
            $id_apartado='t';
            break;
        case 'Multiplataforma':
            $id_apartado='j';
            break;
        case 'Nintendo':
            $id_apartado='n';
            break;
        case 'PlayStation':
            $id_apartado='s';
            break;
        case 'Xbox':
            $id_apartado='x';
            break;
    }
    //Conexión con la base de datos
    $conexion=mysqli_connect(' ͡° ͜ʖ ͡°)',' ͡° ͜ʖ ͡°)',' ͡° ͜ʖ ͡°)',' ͡° ͜ʖ ͡°)')
        or die('Problemas con la conexión a la base de datos.');
    $conexion->set_charset('utf8');
    /*Seleccionar el id maximo y sumarle 1 para que coincida 
    con el id del nuevo artículo y usarlo de nombre de imagen*/
    $registro=mysqli_query($conexion,"select max(id) from articulos")
        or die('Problemas con la instrucción select max, error: '.mysqli_error($conexion));
    if($reg=mysqli_fetch_array($registro)){
        $nombreImagen=$reg['max(id)'];
    }
    $nombreImagen++;
    //Insertar los datos
    $articulos=mysqli_query($conexion,"insert into ( ͡° ͜ʖ ͡°)(titulo,sinopsis,texto,imagen,alt_imagen,apartado,id_apartado,video,palabras_clave) values('$titulo','$sinopsis','$texto','$nombreImagen','$alt_imagen','$apartado','$id_apartado','$video','$palabras_clave')")
        or die('Problemas con la instrucción insert, error: '.mysqli_error($conexion));
    mysqli_close($conexion);

    //Archivar la imagen
    tratarImagen($_FILES['imagen'],$nombreImagen)
    ?>
    <p>El artículo se ha subido correctamente.</p>
    <br>
    <a href="#" onclick="window.history.back()">Volver</a>
    <br>
    <a href="https://www.laultimapartida.com/privado/generarSiteMap.php" target="_blank">Renovar el sitemap.xml</a>
    <?php
}
else{
    header("Location: https://laultimapartida.com");
}

function tratarImagen($imagen, $nombre){
    $archivo=$imagen['name'];
    //Coge la extension
    $ext=pathinfo($archivo, PATHINFO_EXTENSION);

    //Se compara la extension
    $guardada=false;
    if($ext=='jpg' || $ext=='jpeg'){
        $webp=imagecreatefromjpeg($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='gd2'){
        $webp=imagecreatefromgd2($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='gd'){
        $webp=imagecreatefromgd($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='gif'){
        $webp=imagecreatefromgif($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='png'){
        $webp=imagecreatefrompng($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='webp'){
        $webp=imagecreatefromwebp($imagen['tmp_name']);
        $guardada=true;
    }
    else if($ext=='wbmp'){
        $webp=imagecreatefromwbmp($imagen['tmp_name']);
        $guardada=true;
    }
    if($guardada){
        //Coge el ancho y alto de la imagen
        list($ancho,$alto)=getimagesize($imagen['tmp_name']);

        //MINIATURA
        $anchoMax=288;

        if($ancho > $anchoMax){
            $nAlto=($anchoMax / $ancho)*$alto;
            $nAncho=$anchoMax;

            $nuevaImagen=imagecreatetruecolor($nAncho, $nAlto);
            imagecopyresampled($nuevaImagen, $webp, 0, 0, 0, 0,$nAncho, $nAlto, $ancho, $alto);
            $mWebp=$nuevaImagen;
        }
        else{
            $mWebp=$webp;
        }
        imagewebp($mWebp,'../miniaturas/'.$nombre.'_1.webp',50);

        //ARTICULO
        $anchoMax=1080;

        if($ancho > $anchoMax){
            $nAlto=($anchoMax / $ancho)*$alto;
            $nAncho=$anchoMax;

            $nuevaImagen=imagecreatetruecolor($nAncho, $nAlto);
            imagecopyresampled($nuevaImagen, $webp, 0, 0, 0, 0,$nAncho, $nAlto, $ancho, $alto);
            $aWebp=$nuevaImagen;
        }
        else{
            $aWebp=$webp;
        }
        imagewebp($aWebp,'../calidadArticulo/'.$nombre.'_0.webp',75);

        imagedestroy($webp);
    } 
    else{
        echo 'Formato de imagen no soportado.';
    }
}
?>