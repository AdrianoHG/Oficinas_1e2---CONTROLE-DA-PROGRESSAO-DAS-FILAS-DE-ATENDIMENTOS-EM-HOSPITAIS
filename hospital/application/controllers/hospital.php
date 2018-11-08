<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->model('User_model');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
        $this->load->library('session');
        $this->load->helper('date');
        $this->load->helper('pdf_helper');
        if ($this->session->autorizacao != true) {

            redirect('Start/');
        }
    }

    public function index() {

        $this->load->view('Index_hospital');
    }

    public function inserir_paciente() {
        $this->load->view('Inserir_paciente');

        if ($this->Validar()) {
            $verifica = false;
            $tabela = 'paciente';
            $paciente = elements(array('cpf', 'nome', 'sexo', 'idade',), $this->input->post());
            $paciente['FK_hospital_cnpj'] = $this->session->id;
            $BD = $this->User_model->get_pacientes($tabela, $this->session->id);
            foreach ($BD->result() as $linha) {
                if ($linha->cpf == $paciente['cpf']) {
                    $verifica = true;
                }
            }
            if ($verifica) {
                echo 'Paciente ja Cadastrado';
            } else {

                $sql = $this->User_model->inserir($tabela, $paciente);
                redirect('Hospital/');
            }
        } else {
            echo validation_errors();
        }
    }

    public function atualizar($cpf) {
        $tabela = 'paciente';
        $paciente = $this->User_model->get_one_paciente($tabela, $cpf);
        foreach ($paciente->result() as $linha) {
            $dados = array(
                'cpf' => $linha->cpf,
                'nome' => $linha->nome,
                'sexo' => $linha->sexo,
                'idade' => $linha->idade,
                'FK_hospital_cnpj' => $linha->FK_hospital_cnpj
            );
        }
        $this->load->view('Editar_paciente', $dados);
        if ($this->ValidarEdicao()) {
            $dados = elements(array('cpf', 'nome', 'sexo', 'idade'), $this->input->post());
            $tabela = 'paciente';
            $this->User_model->update_paciente($tabela, $dados, $dados['cpf']);
            redirect('Hospital/');
        } else {
            echo validation_errors();
        }
    }

    public function delete($cpf) {
        $tabela = 'paciente';
        $this->User_model->delete($tabela, $cpf);
        redirect('Hospital/');
    }

    public function Validar() {
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('idade', 'Idade', 'required');
        return $this->form_validation->run();
    }

    public function ValidarEdicao() {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('idade', 'Idade', 'required');
        return $this->form_validation->run();
    }

}
