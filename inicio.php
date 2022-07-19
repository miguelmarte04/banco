<?php
session_start();
if(isset($_SESSION['usuario'])){
    $id=$_SESSION['id'];
}else{
    header("location:index.php");
    die();     
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/logom.png"> 
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_cliente.css">
</head>
<body>
<?php
    include ('menu.php');
?>

<div class="contenedor2">
    <div class="card">
        <div>
        <br>
        <a href="paquetes_registrados.php"><h2>Solicitud de Tarjeta</h2></a>
          <br>  
        </div>
    </div>
    <div class="card">
        <div>
            
        <br>
        <a href="paquetes_registrados.php"><h2>Realizar Pagos</h2></a>
          <br>  
          
        </div>
    </div>
    <div class="card">
        <div>
            
        <br>
        <a href="paquetes_registrados.php"><h2>Solicitar Préstamo</h2></a>
          <br>  
        </div>
    </div>

   
  
</div>
<div class="img_portada">
    <img src="img/logoPrincipal.png" alt="portada" >
</div>

<style>
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: white;
    }
</style>

    
</body>
</html>