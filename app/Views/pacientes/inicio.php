<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bienvenido al Registro de Pacientes del Hospital Base Valdivia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            text-align: center;
            margin-top: 100px;
        }

        .btn-group {
            margin-top: 20px;
        }
    </style>
    </head>

    <body>
        <br>
        <div class="container">
            <h1>Bienvenido al Registro de Pacientes</h1>
            <div class="btn-group">
                <a href="<?= base_url() ?>registros" class="btn btn-primary">Ver Registros</a>
                <a href="<?= base_url() ?>formulario" class="btn btn-primary">Ingresar Nuevo Registro</a>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>/public/js/jquery-3.7.0.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/bootstrap.js"></script>
    </body>

</html>