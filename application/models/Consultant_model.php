<?php
class Consultant_model extends CI_Model{
	public function getDataConsultants() {
	    return $this->db->get('consultants')->result();
    }
        
    // Mendapat Profil dari Consultant
    public function getProfileConsultant() {
        $STR = $this->session->userdata('id');
        return $this->db->where('noSTR', $STR)->get('consultants')->row();
    }
    
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setUpdateProfile(){
        $STR = $this->session->userdata('id');
        $data=array (
            //'nama_kolom' => $this->input->post('name_inputan'),
            'photo' => $this->input->post('photo'),
            'jenisPsikologi' => $this->input->post('jenisPsikologi'),
            'lamaPsikologi' => $this->input->post('lamaPsikologi'),
            'tempatPraktik' => $this->input->post('tempatPraktik'),
            'email' => $this->input->post('email'),
            'noHP' => $this->input->post('noHP'),
            'jamKerja' => $this->input->post('jamKerja'),
            'schedule' => $this->input->post('schedule'),
        );
        $this->db->where('noSTR',$STR)->update('consultants', $data);
    }
    
    // Mendapat Keluhan dari Consults
    public function getConsults() {
        $STR = $this->session->userdata('id');
        $this->db->select('*')
                 ->select('consultants.namaConsultant')
                 ->from('consults')
                 ->where('consults.noSTR',$STR)
                 ->join('consultants', 'consultants.noSTR = consults.noSTR')
                 ->join('patients', 'patients.idPasien = consults.idPasien');
 
        return $this->db->get()->result();
        // return $this->db->where('noSTR', $STR)->get('consults')->row();
    }
    
    // Mengeset Reply Consults yang sudah diisi di form Reply Consult
    public function setReplyConsults(){
        $STR = $this->session->userdata('id');
        $data=array (
            //'nama_kolom' => $this->input->post('name_inputan'),
            'status' => $this->input->post('status'),
            'solusi' => $this->input->post('solusi'),
        );
        $this->db->where('noSTR',$STR)->update('consults', $data);
    }

	public function getConsultantProfile($noSTR) {
	    return $this->db->where('noSTR', $noSTR)->get('consultants')->row();
	}

	public function getDataConsultant(){
		$noSTR = $this->session->userdata('id');
		return $this->db->where('noSTR',$noSTR)->get('consultants')->row();
	}
}
?>