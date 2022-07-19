<?php
session_start();
if(isset($_SESSION['correo'])){
    header("location:inicio.php");
    die();
}else{
        
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="img/logom.png"> 
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
 
      
  <body>
   <div class="logo-principal">
<img src="img/logoPrincipal.png" alt="BankDom">

   </div>
      <div class="container">
         
  			   <div class="col-md-5 mx-auto">
               <div class="col-md-12 text-center">
                  <br>
                  <h3>Iniciar Sesión</h3>
                  <hr>
               </div>
                  <div class="error">
                     <span>Usuario y/o contraseña no validos</span>
                  </div>
                     <form action="php/login_client.php" id="formlg">
                             
                        <label for="exampleInputUsuario1"><b>Usuario:</b></label>
                        <input type="text" name="usuario"  class="form-control" id="usuario" aria-describedby="usuarioHelp" placeholder="Usuario" required>
                        
                        <label for="exampleInputUsuario1"><b>Contrase&ntilde;a:</b></label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Digite su contraseña" pattern="[A-Za-z0-9_-]{1,15}" required>
                      <br/>
                           
                        <input type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" value="Iniciar Sesion">
                   
                     </form>

            </div>
         </div>
    <script src="js/jquery-3.3.1.min.js"></script>   
    <script src="js/main.js"></script>	
  </body>
  

</html>

<style>

.container{
   width: 40%;
   padding-top: 25vh;
   border: 1px solid #ccc;
   background-color: #ffff;
   box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25) !important;
}
 
</style>