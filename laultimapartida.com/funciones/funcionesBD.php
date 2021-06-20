<?php
////////////////////////FUNCIONES ÍNDICE////////////////////////
function queryListaArticulos($seccion='',$limite=0){

    //Preparación de query
    $query="select  id_apartado,
                    id,
                    titulo,
                    imagen,
                    alt_imagen,
                    sinopsis,
                    fecha,
                    apartado
                    from ( ͡° ͜ʖ ͡°)";

    if($seccion=='t' || $seccion=='n' || $seccion=='s' || $seccion=='x' || $seccion=='j'){//Cambiado, subir luego sobre las cuatro
        $query.=" where id_apartado='$seccion' order by fecha desc 
            limit $limite, 11";
    }
    /*elseif($seccion=='j'){
        $query.=" where id_apartado in ('j','n','s','x') order by fecha desc
            limit $limite, 11";
    }*/
    else{
        $query.=" order by fecha desc limit $limite, 11";
    }

    //Conexión
    require 'conexion.php';

    //Envio
    $articulos=mysqli_query($conexion,$query);
    if(!$articulos){
        echo 'Error: '.mysqli_error($conexion);
    }

    //Cerrar conexión
    mysqli_close($conexion);

    return $articulos;
}

function queryCantidadArticulos($seccion){

    //Preparación de query
    $query="select id from ( ͡° ͜ʖ ͡°)";

    if($seccion=='t' || $seccion=='n' || $seccion=='s' || $seccion=='x'){
        $query.=" where id_apartado='$seccion'";
    }
    elseif($seccion=='j'){
        $query.=" where id_apartado in ('j','n','s','x')";
    }

    //Conexión
    require 'conexion.php';

    //Envio
    $cantidad=mysqli_query($conexion,$query);
    if(!$cantidad){
        echo 'Error: '.mysqli_query($conexion);
    }

    //Cerrar conexión
    mysqli_close($conexion);

    return $cantidad;
}

function articulo($id){

    //Preparación de query
    $query="select * from ( ͡° ͜ʖ ͡°) where id=$id";

    //Conexión
    require 'conexion.php';

    //Envio query
    $articulo=mysqli_query($conexion,$query);
    if(!$articulo){
        echo 'Error: '.mysqli_error($conexion);
    }

    //Cerrar conexión
    mysqli_close($conexion);

    return $articulo;
}

function siguiente($id,$sec){

    //Preparación de query
    $query="select * from ( ͡° ͜ʖ ͡°) where id = (select min(id) from ( ͡° ͜ʖ ͡°) where id > $id";

    if($sec=='t'||$sec=='n'||$sec=='s'||$sec=='x'){
        $query.=" and id_apartado='$sec')";
    }
    elseif($sec=='j'){
        $query.=" and id_apartado in ('j','n','s','x'))";
    }
    else{
        $query.=")";
    }

    //Conexión
    require 'conexion.php';

    //Envio query
    $siguiente=mysqli_query($conexion,$query);
    if(!$siguiente){
        echo 'Error: '.mysqli_error($conexion);
    }
    
    //Cerrar conexión
    mysqli_close($conexion);

    return $siguiente;
}

function anterior($id,$sec){

    //Preparación de query
    $query="select * from ( ͡° ͜ʖ ͡°) where id = (select max(id) from ( ͡° ͜ʖ ͡°) where id < $id";

    if($sec=='t'||$sec=='n'||$sec=='s'||$sec=='x'){
        $query.=" and id_apartado='$sec')";
    }
    elseif($sec=='j'){
        $query.=" and id_apartado in ('j','n','s','x'))";
    }
    else{
        $query.=")";
    }
    
    //Conexión
    require 'conexion.php';

    //Envio query
    $anterior=mysqli_query($conexion,$query);
    if(!$anterior){
        echo 'Error: '.mysqli_error($conexion);
    }
    
    //Cerrar conexión
    mysqli_close($conexion);

    return $anterior;
}
?>