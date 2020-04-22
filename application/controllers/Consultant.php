<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
     public function showConsultant()
     {
        $this->load->view('Consultant');
     }
}

