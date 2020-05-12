<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Consultant_model');
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->Consultant_model->getDataConsultant();
            $this->load->view('home_view',$data);
        } else
            redirect('home');
    }

	public function Consultant() {
	    if ($this->session->userdata('logged_in')) {
            $data['consultants'] = $this->Consultant_model->getDataConsultants();
            $data['profile'] = $this->Consultant_model->getDataConsultant();
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
            $data['profile'] = $this->Consultant_model->getDataConsultant();
		    $this->load->view('profile_psikolog',$data);
        } else
            redirect('home');
    }
                
    // Mendapat Keliuhan dari Consults
    public function replyConsult() {
        if ($this->session->userdata('logged_in')) {
            $data['consults'] = $this->Consultant_model->getConsults();
            $data['profile'] = $this->Consultant_model->getDataConsultant();
            $this->load->view('consult_consultant',$data);
        } else
            redirect('home');
    }
        
        
    // Mengeset Profil yang sudah diisi di form Edit Profil
    public function setReplyConsults($idConsult) {
        $this->form_validation->set_rules('solusi', 'Solusi', 'required|min_length[5]');
        if ($this->form_validation->run()) {
            if ($this->Consultant_model->setReplyConsults($idConsult))
                $this->session->set_flashdata('notifsukses','Berhasil mengirim solusi');
			else
                $this->session->set_flashdata('notiferror','Gagal mengirim solusi');
        } else 
            $this->session->set_flashdata('notiferror',validation_errors());
        $this->session->set_flashdata('idConsult',$idConsult);
        redirect('consultant/replyconsult');
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
        $this->form_validation->set_rules('jenisPsikologi','Consultant Type','required');
        $this->form_validation->set_rules('lamaPsikologi','Year Experience','required');
        $this->form_validation->set_rules('tempatPraktik','Work Place','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('noHP','Phone Number','required');
        $this->form_validation->set_rules('jamKerja','Work Hours','required');
        $this->form_validation->set_rules('schedule','Schedule Date','required');

        if ($this->form_validation->run()){
            if($_FILES['photo']['name']){
                $config['upload_path'] = './assets/img/Consultants/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('photo')){
                    if($this->Consultant_model->setUpdateProfile($this->upload->data()))
                        $this->session->set_flashdata('notifsukses','Successfully update profile');
                    else
                        $this->session->set_flashdata('notiferror','Update profile error');
                }else
                    $this->session->set_flashdata('notiferror',$this->upload->display_errors());
            } else {
                $photo = $this->Consultant_model->getProfileConsultant()->photo;
                if($this->Consultant_model->setUpdateProfile($photo))
                    $this->session->set_flashdata('notifsukses','Successfully update profile');
                else
                    $this->session->set_flashdata('notiferror','Update profile error');
            }
        } else 
            $this->session->set_flashdata('notiferror','Update profile error');
        redirect('Consultant/showprofile');
    }
    
}
