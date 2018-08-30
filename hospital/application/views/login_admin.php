<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de Fila Hospitalar</title>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    </head>
    <body  class=" container-fluid  body  ">
        <div id="area" class="container-fluid">
            <center>
                <br>
                <form id="formulario" class="form form-check form-control form-signin " name="login" method="POST">
                    <fieldset> 
                        <br>
                        <label>Usuario:</label>
                        <input type="text" value="" name="login" ><br>
                        <label> Senha:</label>
                        <input type="password" value="" name="senha" ><br>
                        <br>
                        <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Login" name="enviar"><br>
                    </fieldset>
                </form>             
            </center>

        </div>

        <div id="area" class="container-fluid">
            <center>
                <br>
                <fieldset>
                    <?php echo form_open_multipart('start/view_cad_admin');
                    ?>
                    <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Cadastrar" name="cad"><br>
                    </form>
                </fieldset>
            </center>
        </div>
    </body>
</html>