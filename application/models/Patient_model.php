<?php
class Patient_model extends CI_Model{
    public function insertKeluhan() {
        $data = array (
            'idPasien' => 1222,
            'noSTR' => $this->input->post('ConsultantList'),
            'keluhan' => $this->input->post('keluhan'),
            'solusi' => '-',
            'status' => '0'
            );
         $this->db->insert('consults',$data);
    }

}
?>