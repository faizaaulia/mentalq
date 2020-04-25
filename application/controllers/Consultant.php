<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Consultant_model');
    }
    
	public function index() {
        $this->load->view('welcome_message');
    }

	public function Consultant() {
	    $data['consultants'] = $this->Consultant_model->getDataConsultants();
		$this->load->view('Consultant', $data);
	}

	public function showConsultant($noSTR) {
		$res['profile'] = $this->Consultant_model->getConsultantProfile($noSTR);
        $res['baseURL'] = base_url('assets/img/Consultants/');
		echo json_encode($res);
    }

	public function profile(){
		$this->load->view('profile_psikolog');
	}
                
	public function showProfile() {
		$data['consultants']= $this->Consultant_model->getDataConsultant();
		$this->load->view('profile_psikolog',$data);
    }
                
    // Mendapat Keliuhan dari Consults
    public function replyConsult() {
        $data['consult'] = $this->Consultant_model->getConsults();
        $this->load->view('consult_consultant',$data);
    }
        
        
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setReplyConsults() {
        $this->Consultant_model->setReplyConsults();
    }
        
    // Mendapat Profil dari Consultant
    public function updateProfile() {
        $data['profile'] = $this->Consultant_model->getProfileConsultant();
        $this->load->view('edit_profile_consultant',$data);
    }
        
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setUpdateProfile() {
        $this->Consultant_model->setUpdateProfile();
    }
    
}
