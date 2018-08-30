<?php

class User_model extends CI_Model {

    public function inserir($tabela, $dados) {
        return $this->db->insert($tabela, $dados);
    }

    public function get_all($tabela) {
        return $this->db->get($tabela);
    }

    public function get_one($tabela, $id) {
        $this->db->where('id', $id);
        return $this->db->get($tabela);
    }

    public function get_user($tabela, $id) {
        $this->db->where('usuario_id', $id);
        return $this->db->get($tabela);
    }
      public function data_grafico($tabela, $id) {
        $this->db->where('usuario_id', $id);
        $query = $this->db->get($tabela);
        return $query->result_array();

    }

    public function get_user_one($tabela, $id_user, $id) {
        $this->db->where('usuario_id', $id_user);
        $this->db->where('usuario_id', $id);
        return $this->db->get($tabela);
    }

    public function get_total($tabela, $usuario_id) {
        $this->db->where('usuario_id', $usuario_id);
        $this->db->select_max('id');
        return $this->db->get($tabela);
    }

    public function delete($tabela, $id) {
        return $this->db->delete($tabela, array('id' => $id));
    }

    public function update($tabela, $dados, $codcidade) {
        $this->db->where('id', $codcidade);
        $update = $this->db->update($tabela, $dados);

        return $update;
    }

    public function update_total($tabela, $total,$id) {
        $this->db->where('usuario_id', $id);
        $this->db->update($tabela, $total);
    }

}
