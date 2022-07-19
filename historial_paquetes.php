<?php
session_start();
if(isset($_SESSION['correo'])){
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Paquetes</title>
    <link rel="shortcut icon" href="image/logo.png"> 
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_cliente.css">
</head>
<body>
<?php
  include ('menu.php');
?>

<div class="row">
    
        <table>
            <thead>
                <tr>
                    <th>Remitente</th>
                    <th>Descripcion</th>
                    <th>Destinatario</th>
                    <th>Valor</th>
                    <th>Dirreccion</th> 
                    <th>Fecha</th> 
                    <th>Estado</th> 
                </tr>
            </thead>
            <tbody>
            <?php  
                require 'php/conexion.php';
                $nueva_consulta= $mysqli->prepare("SELECT * FROM paquetes WHERE id_cliente=? OR id_destinatario=? AND estado='A'");
                $nueva_consulta->bind_param('ss',$id,$id);
                $nueva_consulta->execute();
                $resultado=$nueva_consulta->get_result();
                while($datos=$resultado->fetch_assoc()){
                    $id_destinatario=$datos['id_destinatario'];
                    $id_cliente=$datos['id_cliente'];
                   
                    $nueva_consulta1= $mysqli->prepare("SELECT nombre,apellido FROM clientes WHERE id=?");        
                    $nueva_consulta1->bind_param('s',$id_destinatario);
                    $nueva_consulta1->execute();
                    $resultado1=$nueva_consulta1->get_result();
                    $datos1=$resultado1->fetch_assoc();

                    $nueva_consulta2= $mysqli->prepare("SELECT nombre,apellido FROM clientes WHERE id=?");        
                    $nueva_consulta2->bind_param('s',$id_cliente);
                    $nueva_consulta2->execute();
                    $resultado2=$nueva_consulta2->get_result();
                    $datos2=$resultado2->fetch_assoc();
                    
            ?>
            <tr>
                <td><?php echo $datos2['nombre'].' '.$datos2['apellido']?></td>
                <td><?php echo $datos['descripcion']?></td>
                <td><?php echo $datos1['nombre'].' '.$datos1['apellido']?></td>
                <td><?php echo $datos['valor']?></td>
                <td><?php echo $datos['direccion_envio']?></td>
                <td><?php echo $datos['fecha_registro']?></td>
                <td><?php echo $datos['estado_paquete']?></td>
                
            </tr>
            
        <?php
        }
        ?>
        </tbody>
        </table>    
    </div>
    


    
</body>
</html>