<?php
session_start();
if(isset($_SESSION['usuario'])){
    
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
        <title>Solicitar Préstamo</title>
        <link rel="shortcut icon" href="img/logom.png">
        <link rel="stylesheet" href="css/alertify.css">
        <script src="js/alertify.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fontello.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_cliente.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
                crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
                integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous"></script>
</head>

<body>
        <?php
    include ('menu.php');

?>

        <div class="buscar">
                <div class="col-md-12 text-center">
                        <h4><b>Solicitar Tarjeta</b></h4>
                </div>

        </div>


        <form action="php/registrar_paquete.php" method="POST" name="registration">

                <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Nombres</b></label>
                                        <input type="text" name="nombres" class="form-control" id="nombres"
                                                placeholder="Nombres" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Apellidos</b></label>

                                        <input type="text" name="apellidos" class="form-control" id="apellidos"
                                                placeholder="Apellidos" required>
                                </div>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Cédula</b></label>
                                        <input type="number" name="cedula" maxlength="11" class="form-control"
                                                id="cedula" placeholder="Cédula" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>Pasaporte</b></label>

                                        <input type="text" name="pasaporte" class="form-control" id="pasaporte"
                                                placeholder="Pasaporte">
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Tipo de tarjeta</b></label>

                                        <select name="tipo_tarjeta" class="form-control" id="tipo_tarjeta" required
                                                placeholder="Escoge el tipo de tarjeta" required>
                                                <option>Escoge el tipo de tarjeta</option>
                                                <option value="Débito">Débito</option>
                                                <option value="Crédito">Crédito</option>

                                        </select>

                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>Teléfono Oficina</b></label>
                                        <input type="text" name="telefono_oficina" class="form-control"
                                                id="telefono_oficina" placeholder="Teléfono Oficina">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>Teléfono Residencial</b></label>

                                        <input type="text" name="telefono_residencial" maxlength="10"
                                                class="form-control" id="telefono_residencial"
                                                placeholder="Teléfono Residencial">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Teléfono Movil</b></label>
                                        <input type="number" name="telefono_movil" maxlength="10" class="form-control"
                                                id="telefono_movil" placeholder="Teléfono Movil" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Email</b></label>

                                        <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email" required>
                                </div>
                        </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Dirección Residencia</b></label>

                                        <input type="text" name="direccion_residencial" class="form-control"
                                                id="direccion_residencial" placeholder="Dirección Residencia" required>
                                </div>
                        </div>





                </div>

                <div class="col-md-12 text-center mb-3">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Solicitar
                                Préstamo</button>
                </div>
                <br><br><br>
        </form>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>