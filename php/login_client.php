<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){    
    require 'conexion.php';
    sleep(1);
    $mysqli->set_charset('utf8');
    $correo=$mysqli->real_escape_string($_POST['usuario']); 
    $contra=$mysqli->real_escape_string($_POST['password']);
    if($nueva_consulta= $mysqli->prepare("SELECT * FROM clientes WHERE usuario=? AND pass=? AND estado='A'")){
        
        $nueva_consulta->bind_param('ss',$correo, $contra);
        $nueva_consulta->execute();
        $resultado=$nueva_consulta->get_result();
        if($resultado->num_rows==1){
            $datos=$resultado->fetch_assoc();

            session_start();
            $_SESSION['id']=$datos['id'];
            $_SESSION['usuario']=$_POST['usuario'];
            
            $mysqli->close();
            echo json_encode(array('error' => false));
        }else{
            
            $mysqli->close();
           echo json_encode(array('error' => true));
        }
        
        
    }
}

    
?>