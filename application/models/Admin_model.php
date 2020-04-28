<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function detailConsultant($strnumber) {
        return $this->db->where('noSTR', $strnumber)
                        ->get('consultants')
                        ->row();
    }

    public function deleteConsultant($strnumber) {
        return $this->db->where('noSTR',$strnumber)
                        ->delete('consultants');
    }

    public function updateConsultant($strnumber,$data) {
        return $this->db->where('noSTR',$strnumber)
                        ->update('consultants',$data);
    }

    public function insertConsultant($data) {
        return $this->db->insert('consultants',$data);
    }
}