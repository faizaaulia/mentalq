<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {
    Public function getDataPatients() {
        $username = 1;
        return $this->db->where('idPasien',$username)->get('patients')->row();
      
    }

    Public function getConsult(){
        $this->db->select('*')
		//  ->select('consultants.namaConsultant', 'patients.namaPasien')
         ->from('consults')
         ->where('consults.idPasien', 1)
         ->join('consultants', 'consultants.noSTR = consults.noSTR')
         ->join('patients', 'patients.idPasien = consults.idPasien');
        return $this->db->get();
    }
}