<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Patient extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Patient_model');
	}

    public function showProfile(){
        $data['patients'] = $this->Patient_model->getDataPatients();
        $data['consult'] = $this->Patient_model->getConsult();
        $this->load->view('ProfilePasien', $data);
    }
    
}