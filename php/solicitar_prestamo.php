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
$telefono_oficina= $_POST['telefono_oficina'];
$telefono_residencial= $_POST['telefono_residencial'];
$telefono_movil= $_POST['telefono_movil'];
$email= $_POST['email'];
$direccion_residencia= $_POST['direccion_residencia'];
$provincia= $_POST['provincia'];
$ingresos_mensuales= $_POST['ingresos_mensuales'];
$monto_solicitado= $_POST['monto_solicitado'];
$destino_prestamo= $_POST['destino_prestamo'];
$tipo_credito= $_POST['tipo_credito'];


    require 'conexion.php';
    $sql="INSERT INTO solicitudes_prestamos (id_cliente,nombres,apellidos,cedula,pasaporte,telefono_oficina,telefono_residencial,telefono_movil,email,direccion_residencia,provincia,ingresos_mensuales,monto_solicitado,destino_prestamo,tipo_credito) values('$id_cliente','$nombres','$apellidos','$cedula','$pasaporte','$telefono_oficina','$telefono_residencial','$telefono_movil','$email','$direccion_residencia','$provincia','$ingresos_mensuales','$monto_solicitado','$destino_prestamo','$tipo_credito')";
    if($resultado1=mysqli_query($mysqli,$sql)){
        echo "<script>";
        echo"alertify.alert('Alerta','Solicitud Realizada Exitosamente!', function(){window.location = '../inicio.php';});";
        echo "</script>"; 
    }else{
        echo "<script>";
        echo"alertify.alert('Alerta','Error al Registrar Solicitud favor volver a intentarlo', function(){window.location = '../solicitar_prestamo.php';});";
        echo "</script>"; 
    }
    $mysqli->close();
    $resultado1->close();
  
?>