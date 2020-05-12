<?php
class Patient_model extends CI_Model{
    public function insertKeluhan() {
        $data = array (
            'idPasien' => $this->session->userdata('id'),
            'noSTR' => $this->input->post('ConsultantList'),
            'keluhan' => $this->input->post('keluhan'),
            'solusi' => '-',
            'status' => 'Belum Selesai'
        );
        return $this->db->insert('consults',$data);
    }

    Public function getConsult() {
        $this->db->select('*')
		//  ->select('consultants.namaConsultant', 'patients.namaPasien')
                 ->from('consults')
                 ->where('consults.idPasien', $this->session->userdata('id'))
                 ->join('consultants', 'consultants.noSTR = consults.noSTR')
                 ->join('patients', 'patients.idPasien = consults.idPasien');
        return $this->db->get();
    }

	public function getProfilePatient() {
		return $this->db->where('idPasien',$this->session->userdata('id'))->get('patients')->row();
	}

	//Mendapatkan data terbaru dari Pasien
	public function ubahDataPasien($photo) {
        $idPasien = $this->session->userdata('id');
        $oldphoto = $this->getProfilePatient()->photo;
        $newfoto = $_FILES['photo']['name'];
	    $data = array(
                    'photo' => $newfoto ? $photo['file_name'] : $oldphoto,
                    'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'noHP' => $this->input->post('noHP'),
					'umur' => $this->input->post('umur'),
				);
		//use query builder class to update data patient based on idPasien
		return $this->db->where('idPasien',$idPasien)->update('patients', $data);
	}
}
?>
