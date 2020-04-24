<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getDataPatients() {
        return $this->db->get('patients')
                        ->result();
    }

    public function getDataConsultants() {
        return $this->db->get('consultants')
                        ->result();
    }

    public function detailConsultant($strnumber) {
        return $this->db->where('noSTR', $strnumber)
                        ->get('consultants')
                        ->row();
    }

    public function deleteConsultant($strnumber) {
        return $this->db->where('noSTR',$strnumber)
                        ->delete('consultants');
    }

}