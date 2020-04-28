<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Consultant_model');
    }
    
	public function Consultant() {
	    if ($this->session->userdata('logged_in')) {
            $data['consultants'] = $this->Consultant_model->getDataConsultants();
		    $this->load->view('Consultant', $data);
        } else
            redirect('home');
	}

	public function showConsultant($noSTR) {
		$res['profile'] = $this->Consultant_model->getConsultantProfile($noSTR);
        $res['baseURL'] = base_url('assets/img/Consultants/');
		echo json_encode($res);
    }
                
	public function showProfile() {
		if ($this->session->userdata('logged_in')) {
            $data['consultants']= $this->Consultant_model->getDataConsultant();
		    $this->load->view('profile_psikolog',$data);
        } else
            redirect('home');
    }
                
    // Mendapat Keliuhan dari Consults
    public function replyConsult() {
        if ($this->session->userdata('logged_in')) {
            $data['consult'] = $this->Consultant_model->getConsults();
            $this->load->view('consult_consultant',$data);
        } else
            redirect('home');
    }
        
        
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setReplyConsults() {
        $this->Consultant_model->setReplyConsults();
    }
        
    // Mendapat Profil dari Consultant
    public function updateProfile() {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->Consultant_model->getProfileConsultant();
            $this->load->view('edit_profile_consultant',$data);
        } else
            redirect('home');
    }
        
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setUpdateProfile() {
        $this->Consultant_model->setUpdateProfile();
    }
    
}
