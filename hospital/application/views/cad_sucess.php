<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/font-awesome.css" rel="stylesheet">
         <link href="<?php echo base_url(); ?>bootstrap/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    </head>
    <body class="body info ">
        <br>
        <div class="container card-container container-fluid">
            <center>
                <?php echo form_open_multipart('start/volta');
                ?>
                <h1> Cadastro Sucesso </h1>
                    <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Voltar para login" name="edicao"><br>
                </form>
            </center>
        </div>
    </body>
</html>