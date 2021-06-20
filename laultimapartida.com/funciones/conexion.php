<?php
$maquina='( ͡° ͜ʖ ͡°)';
$usuario='( ͡° ͜ʖ ͡°)';
$clave='( ͡° ͜ʖ ͡°)';
$bd='( ͡° ͜ʖ ͡°)';

$conexion=mysqli_connect($maquina,$usuario,$clave,$bd);
$conexion->set_charset('utf8');
if(!$conexion){
    echo 'Error: '.mysqli_error($conexion);
}
?>