<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultant extends CI_Controller {

        public function __construct()
         {
            parent::__construct();
            $this->load->model('Consultant_model');
        }
        
        // Mendapat Keliuhan dari Consults
        public function replyConsult()
        {
            $data['consult'] = $this->Consultant_model->getConsults();
            $this->load->view('consult_consultant',$data);
        }


        // Mengeset Profil yang sudah diisi di form Edit Profil
        public function setReplyConsults()
        {
            $this->Consultant_model->setReplyConsults();
        }

        // Mendapat Profil dari Consultant
        public function updateProfile()
        {
            $data['profile'] = $this->Consultant_model->getProfileConsultant();
            $this->load->view('edit_profile_consultant',$data);
        }

        // Mengeset Profil yang sudah diisi di form Edit Profil
        public function setUpdateProfile()
        {
            $this->Consultant_model->setUpdateProfile();
        }


    }
