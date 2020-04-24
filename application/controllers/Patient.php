<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	
	function __construct(){
		parent::__construct();		
		$this->load->model('Patient_model');
	}
 
	function updateProfile(){
		$where = array('idPasien' => $idPasien);
		$data['patients'] = $this->m_data->edit_data($where,'user')->result();
	
		$this->load->view('edit_profile_patient');
	}	
	 
}
