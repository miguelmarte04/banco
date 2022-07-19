<?php
session_start();
if(isset($_SESSION['correo'])){
    $id=$_SESSION['id'];
    require 'php/conexion.php';
    $nueva_consulta= $mysqli->prepare("SELECT * FROM clientes WHERE id=?");        
    $nueva_consulta->bind_param('s',$id);
    $nueva_consulta->execute();
    $resultado=$nueva_consulta->get_result();
    $datos=$resultado->fetch_assoc();
    

}else{
    header("location:index.php");
    die();     
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link rel="shortcut icon" href="image/logo.png"> 
    <link rel="stylesheet" href="css/alertify.css">
    <script src="js/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_cliente.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<?php
    include ('menu.php');

?>
      
    <div class="buscar">
        <div class="col-md-12 text-center">
            <h4 class="icon-paper-plane"><b>Perfil del Usuario</b></h4>
        </div>
           
    </div>
        
<div class="logo mb-3">
    <img class="imagen_nueva"src="<?php echo $datos['imagen'];?>" alt="imagen del perfil">
    <form action="php/guardar_datos.php" method="POST" name="registration" enctype="multipart/form-data">
            <div class="form-group">
            <label for="exampleInputEmail1"><b>Seleccionar imagen de Perfil</b></label>
            <input type="file"  name="img" class="form-control" id="img" aria-describedby="emailHelp" 
            ?>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1"><b> Nombre</b></label>
            <input type="text"  name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre" value=<?php echo $datos['nombre'];?> required>
            </div>
            
            <div class="form-group">
            <label for="exampleInputEmail1"><b>Apellido</b></label>
            <input type="text" name="apellido" id="apellido" class="form-control" aria-describedby="emailHelp" placeholder="Apellido" value=<?php echo $datos['apellido'];?> required>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1"><b>Direccion</b></label>
            <input type="text" name="direccion" id="direccion" value=<?php echo $datos['direccion'];?> class="form-control" placeholder="Direccion" required>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1"><b>Correo Electronico</b></label>
            <input type="email" name="correo"  id="correo" class="form-control" aria-describedby="emailHelp" placeholder="Correo Electronico" value=<?php echo $datos['correo_electronico'];?> required >
            </div>
            
            <div class="form-group">
            <label for="exampleInputEmail1"><b>Cedula de Identidad</b></label>
            <input type="text" name="cedula"  id="cedula" class="form-control" aria-describedby="emailHelp" placeholder="Cedula de Identidad" value=<?php echo $datos['cedula'];?>  >
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1"><b>Contraseña</b></label>
            <input type="password" name="pass"  id="pass" class="form-control" aria-describedby="emailHelp" placeholder="Contraseña" value=<?php echo $datos['pass'];?> required >
            </div>
            
            <div class="col-md-12 text-center mb-3">
            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Guardar Datos</button>
            </div>
    </form>
            </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
</body>
</html>