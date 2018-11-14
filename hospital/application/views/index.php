<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Controle de Fila Hospitalar</title>
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
    </head>
    <body class="container ">
        <div class="">
            <center>
                <br>
                <form  class="form-control"  name="login" method="POST" id="area">
                    <fieldset> 
                        <br>
                        <label class="label black-text" for="usuario">Usuario:</label>
                        <input class="form-control" placeholder="Usuario" type="text" value="" name="login" ><br>
                        <label class="label black-text" for="senha"> Senha:</label>
                        <input class="form-control" type="password" value="" placeholder="Senha" name="senha" ><br>
                        <br>
                        <input class="btn btn-group-toggle  hoverable light-blue darken-1 btn-dark btn-hover" type="submit" value="Login" name="enviar"><br>
                    </fieldset>
                </form>             
            </center>
        </div>
        <div class="active  ">
            <center>
                <footer  > 
                    <?php echo form_open_multipart('Start/view_cad_admin');
                    ?>
                    <input class="btn btn-group-toggle hoverable light-blue darken-4 btn-dark btn-hover" type="submit" value="Cadastrar" name="cad"><br>
                    </form>
                    <div class="footer-copyright">
                        <br>
                        <center>
                            <div class="container">
                                Produzido por:  <a class=" blue-darken-4-text text-lighten-3" href="http://www.linkedin.com/in/adriano-henrique-goncalves">Adriano H</a>
                            </div>
                        </center>
                    </div>
                </footer>
            </center>
        </div>

    </body>



</html>