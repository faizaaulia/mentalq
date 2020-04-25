<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant_model extends CI_Model {

    // Mendapat Profil dari Consultant
    public function getProfileConsultant() {
        $STR = '1008';
        return $this->db->where('noSTR', $STR)->get('consultants')->row();
    }

    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setUpdateProfile(){
        $data=array (
            //'nama_kolom' => $this->input->post('name_inputan'),
                           'jenisPsikologi' => $this->input->post('jenisPsikologi'),
                           'lamaPsikologi' => $this->input->post('lamaPsikologi'),
                           'photo' => $this->input->post('photo'),
                           'tempatPraktik' => $this->input->post('tempatPraktik'),
                           'email' => $this->input->post('email'),
                           'noHP' => $this->input->post('noHP'),
                           'jamKerja' => $this->input->post('jamKerja'),
                           'schedule' => $this->input->post('schedule'),
                       );
               $this->db->where('noSTR','1008')->update('consultants', $data);
    }

    // Mendapat Keliuhan dari Consults
    public function getConsults() {
  
        $this->db->select('*')
            ->select('patients.namaPasien')
            ->from('consults')
            ->where('consults.idPasien',2)
            ->join('patients', 'patients.idPasien = consults.idPasien');
            return $this->db->get()->row();
        // return $this->db->where('noSTR', $STR)->get('consults')->row();
    }

    // Mengeset Reply Consults yang sudah diisi di form Reply Consult
    public function setReplyConsults(){
        $data=array (
            //'nama_kolom' => $this->input->post('name_inputan'),
                           'status' => $this->input->post('status'),
                           'solusi' => $this->input->post('solusi'),
                       );
               $this->db->where('noSTR','1008')->update('consults', $data);
    }

    public function getDataConsultants() {
        return $this->db->get('consultants')->result();
    }

    public function getConsultantProfile($noSTR) {
        return $this->db->where('noSTR', $noSTR)->get('consultants')->row();
    }
    

}

}
