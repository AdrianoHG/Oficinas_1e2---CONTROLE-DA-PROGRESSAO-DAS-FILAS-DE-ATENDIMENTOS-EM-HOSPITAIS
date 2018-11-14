<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fila Hospitalar</title>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-grid.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-reboot.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/m/js/materialize.js"></script>
        <link href="<?php echo base_url(); ?>bootstrap/m/css/materialize.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php echo $map['js']; ?>
    </head>
    <body class="body  grey lighten-2">
        <h4> Situação atual das filas nos hospitais</h4>
        <div class="col s12">
            <div>
                <?php echo $map['html']; ?>
            </div>
        </div>
        <h6 class="black-text">Legenda: </h6>
        <h6 class=" green darken-4">Ate 5 Pacientes</h6>
        <h6 class=" yellow accent-4">Entre 6  e 10 Pacientes</h6>
        <h6 class=" red darken-4">Mais de 11 Pacientes</h6>
    </body>


</html>