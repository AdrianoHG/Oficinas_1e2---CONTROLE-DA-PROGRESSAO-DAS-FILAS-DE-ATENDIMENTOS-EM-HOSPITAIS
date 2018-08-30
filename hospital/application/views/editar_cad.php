<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Edição de Conta</title>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    </head>
    <header>
        <nav class="nav justify-content-center  navbar navbar-expand-lg navbar-toggler navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>rendimento/">Voltar <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            </div>
        </nav>
        <br>
    </header>
    <body class="body info card   ">
        <div id="area_insere" class="container container-fluid">
            <center>
                <h4><b>Editar Cadastro</b></h4>
                <form id="formulario"class="form form-check form-control " name="update_conta" method="POST">
                    CODIGO: <br>
                    <input type="text" value="<?php echo $id; ?>" name="cod" readonly ><br>
                    NOME:<br>
                    <input  type="text" value="<?php echo $nome; ?>" name="nome_usuario" ><br>
                     LOGIN:<br>
                    <input  type="text" value="<?php echo $login; ?>" name="login" ><br>
                    SENHA:<br>
                    <input type="password" value="<?php echo $senha; ?>" name="senha"><br>
                    <br>
                    
                    <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Salvar" name="edicao"><br>
                </form>
            </center>
            <br>
        </div>
        <br><br>
        <div class="container container-fluid alert-danger wy-alert-danger">
            <center>
                <footer class="card-footer footer"> 
                       <?php echo form_open_multipart('start/sair/');
                    ?>
                    <input class="btn btn-group-toggle btn-dark btn-hover" type="submit" value="Logout" name="cad"><br>
                    </form>
                </footer>
            </center>
        </div>
    </body>
    
    
   
</html>