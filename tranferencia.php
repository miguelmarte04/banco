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
        <title>Transferencia</title>
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
                        <h4><b>Transferencia</b></h4>
                </div>

        </div>


        <form action="php/registrar_paquete.php" method="POST" name="registration">

                <div class="row">
                        <div class="col-md-12 ">
                                <h5><b>Transferir Fondos</b></h5>
                        </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Cuenta Origen</b></label>
                                        <input type="number" name="cuenta_origen" class="form-control"
                                                id="cuenta_origen" placeholder="Cuenta Origen" required>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Cuenta Destino</b></label>

                                        <input type="number" name="cuenta_destino" class="form-control"
                                                id="cuenta_destino" placeholder="Cuenta Destino" required>
                                </div>
                        </div>
                        <div class="col-md-12 ">
                                <h5><b>Detalle de la Transacción</b></h5>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Monto</b></label>
                                        <input type="number" name="monto" class="form-control" id="monto"
                                                placeholder="Monto" required>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><b>(*) Asunto</b></label>

                                        <textarea name="asunto" id="asunto" class="form-control" cols="30" rows="2"
                                                placeholder="Asunto" required></textarea>

                                </div>
                        </div>


                        <div class="col-md-12 text-center mb-3">
                                <button type="submit"
                                        class=" btn btn-block mybtn btn-primary tx-tfm">Transferir</button>
                        </div>
                        <br><br><br>
        </form>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>