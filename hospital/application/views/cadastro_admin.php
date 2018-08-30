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
    
    <body id="formulario" class="body info card ">
        
        <div id="area_insere" class=" container container-fluid card">
            <center>
                 <h4><b>Novo Hospital</b></h4>
                <?php echo form_open_multipart('start/cadastro');
                ?>
                Nome:<br>
                <input type="text" value="" name="nome"><br>
                endereco:<br>
                <input  type="text" value="" name="endereco" ><br>
                Telefone:<br>
                <input  type="text" value="" name="telefone" ><br>
                <br>
                Login:<br>
                <input  type="text" value="" name="login" ><br>
                <br>
                Senha:<br>
                <input  type="password" value="" name="senha" ><br>
                <br>
                Administrador:<br>
                <input  type="text" value="" name="administrador" ><br>
                <br>
                <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Salvar" name="edicao"><br>
                </form>
            </center>
        </div>
            
    </body>
    
</html>