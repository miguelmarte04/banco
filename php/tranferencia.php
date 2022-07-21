<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="../css/alertify.css">
        <script src="../js/alertify.js"></script>
</head>

</html>
<?php
error_reporting(0);
session_start();

$id_cliente= $_SESSION['id'];
$cuenta_origen= $_POST['cuenta_origen'];
$cuenta_destino= $_POST['cuenta_destino'];
$monto= $_POST['monto'];
$asunto= $_POST['asunto'];

    require 'conexion.php';
    $sql="INSERT INTO transferencia (id_cliente,cuenta_origen,cuenta_destino,monto,asunto) values('$id_cliente','$cuenta_origen','$cuenta_destino','$monto','$asunto')";
    if($resultado1=mysqli_query($mysqli,$sql)){
        echo "<script>";
        echo"alertify.alert('Alerta','Transferencia Exitosa!', function(){window.location = '../inicio.php';});";
        echo "</script>"; 
    }else{
        echo "<script>";
        echo"alertify.alert('Alerta','Error al transferir favor volver a intentarlo', function(){window.location = '../tranferencia.php';});";
        echo "</script>"; 
    }
    $mysqli->close();
    $resultado1->close();
  
?>