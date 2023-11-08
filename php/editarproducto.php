<?php 
include "conexion.php";

if(isset($_POST['nombre'])  && isset($_POST['descripcion'])  && isset($_POST['precio'])){

    if(isset($_POST['imagen'])){
        if($_POST['imagen']!=''){
            $carpeta="../images/";
            $nombre= $_FILES['imagen']['name'];

            $temp = explode('.', $nombre);
            $extension= end($temp);
            $nombreFinal = time().'.'.$extension;

            if($extension=='jpg' || $extension == 'png'){
                if(move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombreFinal)){
                    $fila= $conexion->query('select imagen from productos where id='.$_POST['id']);
                        $id = mysqli_fetch_row($fila);
                        if(file_exists('../images/'.$id[0])){
                        unlink('../images/'.$id[0]);
                        }
                    $conexion->query("update productos set imagen='".$nombreFinal."' where id".$_POST['id']);
                }
        }//llave tipo archivo
    }//llave si no esta vacio 
}//llave imagen

$conexion->query("update productos set 
    nombre='".$_POST['nombre']."', 
    descripcion='".$_POST['descripcion']."', 
    precio=".$_POST['precio']."
    where id=".$_POST['id']);
echo "se actualizo";
}
?>