<?php
$servidor="localhost";
$nombreBd="restaurante_el_dorado";
$usuario="root";
$pass="";
$conexion= new mysqli($servidor,$usuario,$pass,$nombreBd);
if($conexion->connect_error){
    die("No se pudo conectar");
}

?>