<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
   public function consultPatient()
   {
      $this->load->view('ConsultPasien');
   }
   public function showConsultant()
   {
      $this->load->view('Consultant');
   }
}

