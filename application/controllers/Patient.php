<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	
	function __construct(){
		parent::__construct();		
		$this->load->model('Patient_model');
	}
 
	function updateProfile(){
		$data['profile'] = $this->Patient_model->getProfilePatient();
		$this->load->view('edit_profile_patient',$data);
	}
	
	public function setUpdateProfile()
	{
		$this->Patient_model->ubahDataPasien();
	}
	 
}
