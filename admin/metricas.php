<?php
  session_start();
  include "../php/conexion.php";
  if(!isset($_SESSION['datos_login'])){
    header("Location: ../index.php");
  }
 
  

 


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Metricas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include "./layouts/header.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            	
         <h1 align="right">Metricas </h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
       

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <?php 
      

      
      ?>
      <div class="child">
      <?php 

      $consulta="SELECT COUNT(*) total FROM productos;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja= $data['total'];

      $consulta="SELECT COUNT(*) total FROM usuario;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja1= $data['total'];

      $consulta="SELECT COUNT(*) total FROM carrito;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja2= $data['total'];

      $consulta="SELECT COUNT(*) total FROM categorias;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja3= $data['total'];

      $consulta="SELECT COUNT(*) total FROM cupones;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja4= $data['total'];

      $consulta="SELECT COUNT(*) total FROM envios;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja5= $data['total'];
       
      $consulta="SELECT COUNT(*) total FROM productos_venta;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja6= $data['total'];

      $consulta="SELECT COUNT(*) total FROM ventas;";
      $result=mysqli_query($conexion,$consulta);
      $data=mysqli_fetch_array($result);
      $caja7= $data['total'];

      $_Volumen_BD = "SHOW TABLE STATUS";
      $Vol_Base_Datos = mysqli_query($conexion, $_Volumen_BD);
    
    
      // Calculamos el volumen de todas las tablas
      $bytes = 0;
      while ($tabla = mysqli_fetch_assoc($Vol_Base_Datos)){
        $bytes += ($tabla['Data_length'] + $tabla['Index_length']);
      }
      
      // Transformamos y redondeamos a dos decimales
      $kilobytes = round($bytes/1024, 2);
      $megabytes = round($kilobytes/1024, 2);

       
      ?>
      


<table class="table">
         <thead>
           <tr>
           <th>Entidad</th>
           <th>Numero de registros</th>

           <th></th>

            </tr>
         </thead>
         <tbody>

         <td><?php echo "Productos";?></td>
         <td><?php echo $caja;?></td>
         <tr>
         <td><?php echo "Usuario";?></td>
         <td><?php echo $caja1;?></td></tr>
         <tr>
         <td><?php echo "Carrito";?></td>
         <td><?php echo $caja2;?></td></tr>
         <tr>
         <td><?php echo "Categorias";?></td>
         <td><?php echo $caja3;?></td></tr>
         <tr>
         <td><?php echo "Cupones";?></td>
         <td><?php echo $caja4;?></td></tr>
         <tr>
         <td><?php echo "Envios";?></td>
         <td><?php echo $caja5;?></td></tr>
         <tr>
         <td><?php echo "Productos_venta";?></td>
         <td><?php echo $caja6;?></td></tr>
         <tr>
         <td><?php echo "Ventas";?></td>
         <td><?php echo $caja7;?></td></tr>



         <table class="table1">
         <thead>
           <tr>
           <th>Tamaño de la base de datos </th>

           <th></th>

            </tr>
         </thead>
         <tbody>
         <tr>
         <td><?php echo "Restaurante EL DORADO";?></td>
         <td><?php echo $megabytes;?></td></tr>
         


      <p>Estadisticas generales</p>         
         <div align="center">
<table width="1000" border="1">
<tr>
<td valign="bottom">
<div align="center">
<table width="119" height="<?php echo $caja*15;?>" border="0">
<tr>
<td bgcolor="pink"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="118" height="<?php echo $caja1*15;?>" border="0">
<tr>
<td bgcolor="green"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="119" height="<?php echo $caja2*15;?>" border="0">
<tr>
<td bgcolor="blue"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="122" height="<?php echo $caja3*15;?>" border="0">
<tr>
<td bgcolor="brown"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="115" height="<?php echo $caja4*15;?>" border="0">
<tr>
<td bgcolor="orange"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="125" height="<?php echo $caja5*15;?>" border="0">
<tr>
<td bgcolor="purple"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="125" height="<?php echo $caja6*15;?>" border="0">
<tr>
<td bgcolor="red"></td>
</tr>
</table>
</div>
</td>
<td valign="bottom">
<div align="center">
<table width="125" height="<?php echo $caja7*15;?>" border="0">
<tr>
<td bgcolor="brown"></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table width="1000" border="1">
<tr>
<td width="70"><div>Productos</div></td>
<td width="70"><div align="center">Usuario</div></td>
<td width="70"><div align="center">Carrito</div></td>
<td width="70"><div align="center">Categorias</div></td>
<td width="70"><div align="center">Cupones</div></td>
<td width="70"><div align="center">Envios</div></td>
<td width="70"><div align="center">P_venta</div></td>
<td width="70"><div align="center">Ventas</div></td>

</tr>
</table>
</div>
       

<script src="./dashboard/plugins/jquery/jquery.min.js"></script>

<script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./dashboard/plugins/moment/moment.min.js"></script>
<script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dashboard/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dashboard/dist/js/demo.js"></script>







</script>


</body>
</html>
