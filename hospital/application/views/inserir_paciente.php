<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Paciente</title>
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
        <script language="JavaScript" type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/Mascara.js"></script> 

    </head>
    <header class="active">
        <nav  class="grey darken-4">

            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="brand-logo-sm center waves-effect waves-green btn btn-dark grey darken-4 btn-hover" href="<?php echo base_url(); ?>Hospital/"  <span class="sr-only">Voltar</span></a>
                </li> 
            </ul>
        </nav>
    </header>

    <body class="body info ">
        <div class="col-8 row">
            <form class="" name="paciente" method="POST">
                <h4 class="title blue-grey-text">Novo Paciente</h4>
                <div class="input-field col s6">
                    <label class="label black-text" for="cpf">CPF</label>
                    <input class="form-control" id="cpf" type="text" value="" name="cpf" maxlength="14" onKeyPress="MascaraCPF(paciente.cpf);" <!-onBlur="ValidarCPF(paciente.cpf);"->
                </div>
                <div class="input-field col s6">
                    <label class="label black-text" for="nome">Nome</label>
                    <input class="form-control"  id="nome" type="text" value="" name="nome"  ><br>
                </div>
                <div class="input-field col s6">

                    <select id="sexo" class="form-control" name="sexo">
                        <option value="" disabled selected>Sexo</option>
                        <option value="F" >FEMININO</option>
                        <option value="M">MASCULINO</option>
                    </select><br><br>
                </div>
                <div class="input-field col s6">
                    <label class="label black-text" for="idade">Idade</label>
                    <input class="form-control" id="idade" type="number" value="" name="idade" min="0" max="120"><br><br>
                </div>
                <div class="input-field col s12">
                    <input class="btn btn-group-toggle hoverable light-blue darken-4 btn-dark btn-hover" type="submit" value="Salvar" name="enviar"><br>
                    </form>
                </div>

                <br>
                </div>  
                <div class="container container-fluid alert-danger wy-alert-danger">
                    <center>
                        <footer class="card-footer footer"> 
                            <?php echo form_open_multipart('Start/sair/');
                            ?>
                            <input class="btn btn-group-toggle hoverable btn-dark btn-hover red darken-1" type="submit" value="Logout" name="cad"><br>
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