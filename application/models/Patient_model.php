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

    Public function getDataPatients() {
        $username = 1;
        return $this->db->where('idPasien',$username)->get('patients')->row();
    }

    Public function getConsult() {
        $this->db->select('*')
		//  ->select('consultants.namaConsultant', 'patients.namaPasien')
                 ->from('consults')
                 ->where('consults.idPasien', 1)
                 ->join('consultants', 'consultants.noSTR = consults.noSTR')
                 ->join('patients', 'patients.idPasien = consults.idPasien');
        return $this->db->get();
    }

	public function getProfilePatient() {
	    $idPasien= '1';
		return $this->db->where('idPasien',$idPasien)->get('patients')->row();
	}


	//Mendapatkan data terbaru dari Pasien
	public function ubahDataPasien() {
	    $data = array(
                    'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'noHP' => $this->input->post('noHP'),
					'umur' => $this->input->post('umur'),
				);
		//use query builder class to update data patient based on idPasien
		$this->db->where('idPasien','1')->update('patients',$data);
	}
}
?>
