<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Consultant_model');
		$this->load->model('Patient_model');
	}

	public function consultPatient() {
		if ($this->session->userdata('logged_in')) {
			$data['consultants'] = $this->Consultant_model->getDataConsultants();
			$this->load->view('ConsultPasien', $data);
		} else
			redirect('home');
	}

	public function inputKeluhan() {
		$this->Patient_model->insertKeluhan();
	}

	public function Consultant() {
	    if ($this->session->userdata('logged_in')) {
            $data['consultants'] = $this->Consultant_model->getDataConsultants();
		    $this->load->view('Consultant', $data);
        } else
            redirect('home');
	}

	public function showProfile() {
		$data['patients'] = $this->Patient_model->getDataPatients();
		$data['consult'] = $this->Patient_model->getConsult();
		$this->load->view('ProfilePasien', $data);
	}

	function updateProfile() {
		$data['profile'] = $this->Patient_model->getProfilePatient();
		$this->load->view('edit_profile_patient',$data);
	}

	public function setUpdateProfile() {
		$this->Patient_model->ubahDataPasien();
	}

}
