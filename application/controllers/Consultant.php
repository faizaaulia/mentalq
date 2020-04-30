<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
    public function __construct()
    {
       parent::__construct();
       $this->load->model('Consultant_model');
    }

    public function Consultant() {
        $data['consultants'] = $this->Consultant_model->getDataConsultants();
        $this->load->view('Consultant', $data);
    }

    public function showConsultant($noSTR)
    {
        $res['profile'] = $this->Consultant_model->getConsultantProfile($noSTR);
        $res['baseURL'] = base_url('assets/img/Consultants/'); 
        echo json_encode($res);
        
    public function setUpdateProfile() {
        $this->form_validation->set_rules('jenisPsikologi', 'Consultant Type', 'required');
        $this->form_validation->set_rules('lamaPsikologi', 'Year Experience', 'required');
        $this->form_validation->set_rules('tempatPraktik', 'Work Place', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('noHP', 'Phone Number', 'required');
        $this->form_validation->set_rules('jamkerja', 'Work Hours', 'required');
        $this->form_validation->set_rules( 'schedule', 'Schedule Date', 'required');

        if ($this->form_validation->run()) {
            if ($_FILES['photo'] ['name']) {
                $config['upload_path'] = './assets/img/Consultants/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    if ($this->Consultant_model->setUpdateProfile($this->upload->data()))
                        $this->session->set_flashdata('notifsukses', 'Berhasil mengubah profil foto');
                    else
                        $this->session->set_flashdata('notiferror', 'Gagal mengubah profil');
                } else
                    $this->session->set_flashdata('notiferror', $this->upload->display_errors());
            } else {
                $photo = $this->Consultant_model->getProfileConsultant()->photo;
                if ($this->Consultant_model->setUpdateProfile($photo))
                    $this->session->set_flashdata('notifsukses', 'Berhasil mengubah profil ga');
                else
                    $this->session->set_flashdata('notiferror', 'Gagal mengubah profil');
            }       
        } else
            $this->session->set_flashdata('notiferror', 'Lengkapi semua field');
        redirect('consultant/updateprofile');
        // $this->Consultant_model->setUpdateProfile ();
    }
}
