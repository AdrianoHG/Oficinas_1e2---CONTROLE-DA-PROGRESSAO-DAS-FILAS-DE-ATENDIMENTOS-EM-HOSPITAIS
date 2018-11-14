<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edição de Conta</title>      
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
    <header class="active">
        <nav  class="grey darken-4">

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="brand-logo-sm center btn waves-effect waves-green btn-dark grey darken-4 btn-hover" href="<?php echo base_url(); ?>hospital/">Voltar <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            </div>
        </nav>
        <br>
    </header>
    <body class="body info ">
        <div class="col-8 row">
            <form name="update_conta" method="POST">

                <h4 class="title blue-grey-text">Editar Cadastro</b></h4><br>
                <div class="input-field col s6">
                    <label class="black-text" for="cnpj">Cnpj</label>
                    <input class="" id="cnpj" type="text"  value="<?php echo $cnpj; ?>" name="cnpj" readonly ><br>        
                </div>
                <div class="input-field col s6">
                    <label class="black-text" for="nome">Nome</label>
                    <input class="" id="nome"  type="text" value="<?php echo $nome; ?>"  name="nome"><br>
                </div>
                <div class="input-field col s6">
                    <label class="label black-text" for="login">Login</label>
                    <input class="" id="login" type="text" value="<?php echo $login; ?>" name="login" ><br>
                </div>
                <div class="input-field col s6">
                    <label class="label black-text" for="senha">Senha</label>
                    <input class="" id="senha"  type="password" value="<?php echo $senha; ?>" name="senha"><br>
                    <br>
                </div>
                <input class="btn btn-group-toggle hoverable light-blue darken-4 btn-dark btn-hover" type="submit" value="Salvar" name="edicao"><br>
            </form>           
        </div>
        <div class="col-12">
            <center>
                <footer>
                    <?php echo form_open_multipart('Start/endereco/');
                    ?>
                    <input class="btn btn-group-toggle hoverable blue darken-4 btn-dark btn-hover" type="submit" value="Alterar Endereco" name="cad">
                    </form>
                    <br>
                    <?php echo form_open_multipart('Start/delete_hospital/');
                    ?>
                    <input type="hidden" name="cnpj" value="<?php echo $this->session->id; ?>">
                    <input class="btn btn-group-toggle hoverable red btn-dark btn-hover " type="submit" value="Deletar Conta" name="cad"><br>
                    </form>
                    <br><br>

                    <div class="footer-copyright">
                        <br>
                        <div class="container">
                            Produzido por:  <a class=" blue-darken-4-text text-lighten-3" href="http://www.linkedin.com/in/adriano-henrique-goncalves">Adriano H</a>
                        </div>
                    </div>

                </footer>
            </center>
        </div>
    </body>



</html>