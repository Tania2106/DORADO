<?php 
include "conexion.php";

if(isset($_POST['nombre'])  && isset($_POST['telefono'])  && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nivel']) ){

 
}//llave imagen

$conexion->query("update usuario set 
    nombre='".$_POST['nombre']."', 
    telefono='".$_POST['telefono']."', 
    email='".$_POST['email']."', 
    password='".$_POST['password']."', 
    nivel='".$_POST['nivel']."'
    where id=".$_POST['id']);
echo "se actualizo";

?>