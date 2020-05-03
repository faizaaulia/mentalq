<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Consultant_model');
		$this->load->model('Patient_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$data['profile'] = $this->Patient_model->getProfilePatient();
			$this->load->view('home_view',$data);
		} else
			redirect('home');
	}	

	public function consultPatient() {
		if ($this->session->userdata('logged_in')) {
			$data['profile'] = $this->Patient_model->getProfilePatient();
			$data['consultants'] = $this->Consultant_model->getDataConsultants();
			$this->load->view('ConsultPasien', $data);
		} else
			redirect('home');
	}

	public function inputKeluhan() {
		$this->Patient_model->insertKeluhan();
		redirect('Patient/consultpatient');
	}

	public function Consultant() {
	    if ($this->session->userdata('logged_in')) {
			$data['consultants'] = $this->Consultant_model->getDataConsultants();
			$data['profile'] = $this->Patient_model->getProfilePatient();
		    $this->load->view('Consultant', $data);
        } else
            redirect('home');
	}

	public function showProfile() {
		$data['patients'] = $this->Patient_model->getProfilePatient();
		$data['consult'] = $this->Patient_model->getConsult();
		$data['profile'] = $this->Patient_model->getProfilePatient();
		$this->load->view('ProfilePasien', $data);
	}

	function updateProfile() {
		$data['profile'] = $this->Patient_model->getProfilePatient();
		$this->load->view('edit_profile_patient',$data);
	}

	public function setUpdateProfile() {
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('alamat','Address','required');
		$this->form_validation->set_rules('noHP','Phone Number','required');
		$this->form_validation->set_rules('umur','Age','required');


		if ($this->form_validation->run()){
            if($_FILES['photo']['name']){
                $config['upload_path'] = './assets/img/Patients/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('photo')){
                    if($this->Patient_model->ubahDataPasien($this->upload->data()))
                        $this->session->set_flashdata('notifsukses','Berhasil mengubah profil foto');
                    else
                        $this->session->set_flashdata('notiferror','Gagal mengubah profil');
                }else
                    $this->session->set_flashdata('notiferror',$this->upload->display_errors());
            } else {
                $photo = $this->Patient_model->getProfilePatient()->photo;
                if($this->Patient_model->ubahDataPasien($photo))
                    $this->session->set_flashdata('notifsukses','Berhasil mengubah profil ga');
                else
                    $this->session->set_flashdata('notiferror','Gagal mengubah profil');
            }
        } else 
            $this->session->set_flashdata('notiferror','Lengkapi semua field');
        redirect('Patient/showprofile');

	}

}
