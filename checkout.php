<?php 
session_start();
if(isset($_SESSION['compra'])){
 
}

$arreglo = $_SESSION['compra'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pago</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body style="background-color:rgb(252,243,207); font-family:times; color:#1B2631 ;">
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
    <form action="./thankyou.php" method="post">

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
          
            </div>
          </div>
          <div class="row">

              <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black" style=" color:#1B2631 ;">Detalles de la compra</h2>
                <div class="p-3 p-lg-5 border">
                  <div class="form-group">
              
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black" style=" color:#1B2631 ;">Nombre <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black" style=" color:#1B2631 ;">Apellido<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black" style=" color:#1B2631 ;">Direccion <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Direccion...">
                    </div>
                  </div>



                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_state_country" class="text-black" style=" color:#1B2631 ;">Ciudad<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                    </div>
                    <div class="col-md-6">
                      
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black" style=" color:#1B2631 ;">Correo electronico <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black" style=" color:#1B2631 ;">Celular<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Numero de celular">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Crear cuenta?</label>
                    <div class="collapse" id="create_an_account">
                      <div class="py-2">
                        <p class="mb-3" style=" color:#1B2631 ;">Crear cuenta</p>
                        <div class="form-group">
                          <label for="c_account_password" class="text-black" style=" color:#1B2631 ;">Digite una contraseña</label>
                          <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                   
                    <div class="collapse" id="ship_different_address">
                      <div class="py-2">

                        <div class="form-group row">
                          <div class="col-md-6">
                            <label for="c_diff_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                          </div>
                          <div class="col-md-6">
                            <label for="c_diff_lname" class="text-black">Apellido<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-12">
                            <label for="c_diff_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                          </div>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>

                        <div class="form-group row">
                          <div class="col-md-6">
                            <label for="c_diff_state_country" class="text-black">Ciudad <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                          </div>
                
                        </div>

                        <div class="form-group row mb-5">
                          <div class="col-md-6">
                            <label for="c_diff_email_address" class="text-black">Direccion de correo<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                          </div>
                          <div class="col-md-6">
                            <label for="c_diff_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_order_notes" class="text-black" style=" color:#1B2631 ;">Notas</label>
                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escriba su nota..."></textarea>
                  </div>

                </div>
              </div>
              <div class="col-md-6">

                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black" style=" color:#1B2631 ;">Codigo cupon</h2>
                    <div class="p-3 p-lg-5 border">
                      
                      <label for="c_code" class="text-black mb-3" style=" color:#1B2631 ;">Ingrese el codigo del cupon</label>
                      <div class="input-group w-75">
                        <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Aplicar</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                
                
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black" style=" color:#1B2631 ;">Tu orden</h2>
                    <div class="p-3 p-lg-5 border">
                      <table class="table site-block-order-table mb-5">
                        <thead>
                          <th style=" color:#1B2631 ;">Producto</th>
                          <th style=" color:#1B2631 ;">Total</th>
                        </thead>
                        <tbody>
                          <?php
                          $total= 0; 
                          for($i=0;$i<count($arreglo);$i++){
                          $total =$total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
                          
                          ?>
                    
                          <tr>
                            <td style=" color:#1B2631 ;"><?php echo $arreglo[$i]['Nombre']?></td>
                            <td style=" color:#1B2631 ;">$<?php echo number_format($arreglo[$i]['Precio'],2,'.','');?></td>
                          </tr>
                      <?php 
                          }
                      ?>
                          <tr>
                            <td style=" color:#1B2631 ;"> Total de la orden</td>
                            <td style=" color:#1B2631 ;">$<?php echo number_format($total,2,'.','');?></td>
                          </tr>


                        </tbody>
                      </table>

                  

                     

                      <div class="form-group">
                        <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Ordenar</button>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>
    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>