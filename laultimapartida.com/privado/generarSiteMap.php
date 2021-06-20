<?php
    //Mysql peticiones
    $conexion=mysqli_connect("sldk595.piensasolutions.com","qaeo174","Usuario2Publ","qaeo173")
        or die('Problemas con la conexión a la base de datos.');
    $conexion->set_charset('utf8');
    $articulosPortada=mysqli_query($conexion,"select id,fecha,titulo from ( ͡° ͜ʖ ͡°) order by fecha desc")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    $articulosMultiplataforma=mysqli_query($conexion,"select id from ( ͡° ͜ʖ ͡°) where id_apartado='j'")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    $articulosTecnologia=mysqli_query($conexion,"select id from ( ͡° ͜ʖ ͡°) where id_apartado='t'")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    $articulosNintendo=mysqli_query($conexion,"select id from ( ͡° ͜ʖ ͡°) where id_apartado='n'")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    $articulosPlay=mysqli_query($conexion,"select id from ( ͡° ͜ʖ ͡°) where id_apartado='s'")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    $articulosXbox=mysqli_query($conexion,"select id from ( ͡° ͜ʖ ͡°) where id_apartado='x'")
        or die('Problemas con la instrucción select, error: '.mysqli_error($conexion));
    mysqli_close($conexion);

    //sitemap.xml
    $xml=new DOMDocument("1.0","UTF-8");
    $urlset=$xml->createElement("urlset");

    //Creación del atributo del urlset
    $xmlns=$xml->createAttribute("xmlns");
    $xmlns->value="http://www.sitemaps.org/schemas/sitemap/0.9";
    $urlset->appendChild($xmlns);

    //Creación de las url del index, secciones
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME'],"1.00",'','hourly');
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Multiplataforma","0.80",'','hourly');
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Tecnologia","0.80",'','hourly');
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Nintendo","0.80",'','hourly');
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/PlayStation","0.80",'','hourly');
    agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Xbox","0.80",'','hourly');
    //Artículos desde portada 
    while($reg=mysqli_fetch_array($articulosPortada)){
        $tituloLink=preg_replace('/\s+/', '_', $reg['titulo']);
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Portada/".$reg['id']."/".$tituloLink,"0.80",$reg['fecha']);
    }
    //ÍNDICES DE CADA SECCIÓN
    //Portada
    $cantidad=mysqli_num_rows($articulosPortada);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Portada/".$i,"0.80",'','daily');
    }
    //Juegos General
    $cantidad=mysqli_num_rows($articulosMultiplataforma);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Multiplataforma/".$i,"0.64",'','daily');
    }
    //Teconología
    $cantidad=mysqli_num_rows($articulosTecnologia);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Tecnologia/".$i,"0.64",'','daily');
    }
    //Nintendo
    $cantidad=mysqli_num_rows($articulosNintendo);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Nintendo/".$i,"0.64",'','daily');
    }
    //PlayStation
    $cantidad=mysqli_num_rows($articulosPlay);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/PlayStation/".$i,"0.64",'','daily');
    }
    //Xbox
    $cantidad=mysqli_num_rows($articulosXbox);
    $cantidad=calcularCantidadIndices($cantidad);
    for($i=1;$i<$cantidad;$i++){
        agregarUrl($xml,$urlset,"https://".$_SERVER['SERVER_NAME']."/Xbox/".$i,"0.64",'','daily');
    }
    //Agregar todo al xml y guardarlo
    //$doc->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
    $xml->appendChild($urlset);
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.es"){
        $xml->save("../sitemap_es.xml");
    }
    else{
        $xml->save("../sitemap.xml");
    }
    echo "Sitemaps generado";
/*}
else{
    header("Location: https://laultimapartida.com");
}
*/
//FUNCIONES
//Crear cada nodo url
function agregarUrl($xml,$urlset,$locString,$priorityString,$lastmodDate='',$changefreqString='never'){
    if($lastmodDate==''){
        $lastmodDate=date("c");
    }
    else{
        $formatoLastModDate=str_replace(' ','T',$lastmodDate);
        $formatoLastModDate.='+00:00';
        //$lastmodDate=$formatoLastModDate;
        $lastmodDate=mb_convert_encoding($formatoLastModDate, "UTF-8", "auto");
    }
    $url=$xml->createElement("url");
    $locString=mb_convert_encoding($locString, "UTF-8", "auto");
    $loc=$xml->createElement("loc",$locString);
    $lastmod=$xml->createElement("lastmod",$lastmodDate);
    $changefreq=$xml->createElement("changefreq",$changefreqString);
    $priority=$xml->createElement("priority",$priorityString);
    $url->appendChild($loc);
    $url->appendChild($lastmod);
    $url->appendChild($changefreq);
    $url->appendChild($priority);
    $urlset->appendChild($url);
}
//Calcular la cantidad de indices en base al numero de registros entre 11 y pasarlo a int
function calcularCantidadIndices($cantidad){
    $cantidad/=11;
    $cantidad=intval($cantidad);
    $cantidad+=2;
    return $cantidad;
}
?>