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
        
    }
}

