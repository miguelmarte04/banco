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
            
            <h2><a href="paquetes_registrados.php">Registrados para enviar</a></h2>
            <h4><a href="paquetes_registrados.php"><?php echo $para_enviar;?></a></h4>
        </div>
    </div>
    <div class="card">
        <div>
            
            <h2><a href="paquetes_enviados.php">Paquetes enviados</a></h2>
            <h4><a href="paquetes_enviados.php"><?php echo $enviados;?></a></h4>
        </div>
    </div>
    <div class="card">
        <div>
            
            <h2><a href="paquetes_disponibles.php">Paquetes disponibles</a></h2>
            <h4><a href="paquetes_disponibles.php"><?php echo $disponibles;?></a></h4>
        </div>
    </div>

    <div class="card">
        <div>
            
            <h2><a href="paquetes_entregados.php">Paquetes entregados</a></h2>
            <h4><a href="paquetes_entregados.php"><?php echo $entregados;?></a></h4>
        </div>
    </div>   
</div>
<div class="img_portada">
    <img src="img/logoPrincipal.png" alt="portada" >
</div>


    
</body>
</html>