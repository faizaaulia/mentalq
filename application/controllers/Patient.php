<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Consultant_model');
      $this->load->model('Patient_model');
   }

   public function consultPatient()
   {
      $data['consultants'] = $this->Consultant_model->getDataConsultants();
      $this->load->view('ConsultPasien', $data);

   }

   public function inputKeluhan()
   {
      $this->Patient_model->insertKeluhan();
   }

   public function showConsultant()
   {
      $this->load->view('Consultant');
   }
}