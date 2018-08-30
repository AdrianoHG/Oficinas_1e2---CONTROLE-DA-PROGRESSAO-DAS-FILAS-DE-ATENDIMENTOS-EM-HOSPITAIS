<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {

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
        $this->load->helper('date');
        $this->load->helper('pdf_helper');
        if ($this->session->autorizacao != true) {

            redirect('start/');
        }
    }

    public function index() {

        $this->load->view('index_hospital');
    }
}
