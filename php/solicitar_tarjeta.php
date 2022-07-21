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
$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$cedula= $_POST['cedula'];
$pasaporte= $_POST['pasaporte'];
$tipo_tarjeta= $_POST['tipo_tarjeta'];
$telefono_oficina= $_POST['telefono_oficina'];
$telefono_residencial= $_POST['telefono_residencial'];
$telefono_movil= $_POST['telefono_movil'];
$email= $_POST['email'];
$direccion_residencial= $_POST['direccion_residencial'];


    require 'conexion.php';
    $sql="INSERT INTO solicitudes_tarjetas (id_cliente,nombres,apellidos,cedula,pasaporte,tipo_tarjeta,telefono_oficina,telefono_residencial,telefono_movil,email,direccion_residencial) values('$id_cliente','$nombres','$apellidos','$cedula','$pasaporte','$tipo_tarjeta','$telefono_oficina','$telefono_residencial','$telefono_movil','$email','$direccion_residencial')";
    if($resultado1=mysqli_query($mysqli,$sql)){
        echo "<script>";
        echo"alertify.alert('Alerta','Solicitud Realizada Exitosamente!', function(){window.location = '../inicio.php';});";
        echo "</script>"; 
    }else{
        echo "<script>";
        echo"alertify.alert('Alerta','Error al Registrar Solicitud favor volver a intentarlo', function(){window.location = '../solicitar_tarjeta.php';});";
        echo "</script>"; 
    }
    $mysqli->close();
    $resultado1->close();
  
?>