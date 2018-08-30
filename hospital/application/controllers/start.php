<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->model('user_model');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('index');
    }

    public function view_cad_admin() {
        $this->load->view('cadastro_admin');
    }
      public function view_user() {
        $this->load->view('view_user');
    }
      public function view_login_admin() {
           $this->load->view('header');
        $this->load->view('login_admin');
        if ($this->valida()) {
            $tabela = 'hospital';
            $dadosform = elements(array('login', 'senha', 'id'), $this->input->post());
            $dadosbd = $this->user_model->get_all($tabela);

            foreach ($dadosbd->result() as $linha) {
                $senha = $linha->senha;
                $senha = $this->encrypt->decode($senha);
                if ($linha->login == $dadosform['login'] and $dadosform['senha'] == $senha) {
                    $this->session->id = $linha->id;
                    $this->session->autorizacao = true;
                    $this->session->nome = $linha->nome_usuario;

                    redirect('hospital/');
                }
            }
        } else {
            echo validation_errors();
        }
    }
   

    public function cadastro() {
        $this->load->view('cadastro_admin');
        $verifica = false;
        if ($this->valida_cad()) {
            $tabela = 'hospital';
            $dadosform = elements(array('nome', 'endereco', 'telefone', 'login','senha','administrador'), $this->input->post());
            $senha = $this->encrypt->encode($dadosform['senha']);
            $dadosform['senha'] = $senha;
            $dadosbd = $this->user_model->get_all($tabela);
            foreach ($dadosbd->result() as $linha) {
                if ($linha->login == $dadosform['login']) {
                    $verifica = true;
                }
            }
            if ($verifica) {
                echo 'Login ja cadastrado';
            } else {
                $this->user_model->inserir($tabela, $dadosform);
                $this->load->view('cad_sucess');
            }
        } else {
            echo validation_errors();
        }
    }

    public function volta() {
        redirect('start/');
    }

    public function valida() {
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        return $this->form_validation->run();
    }

    public function valida_cad() {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('endereco', 'Endereco', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_rules('administrador', 'Administrador', 'required');
        return $this->form_validation->run();
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect('start/');
    }


}
