<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
        );
        $this->db->insert('tabelartikel', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM tabelartikel');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM tabelartikel WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
        );
        $this->db->where('id', $id);
        $this->db->update('tabelartikel', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('tabelartikel');
    }
}
