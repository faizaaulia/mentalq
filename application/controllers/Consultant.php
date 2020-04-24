<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
<<<<<<< Updated upstream
 
    public function profile(){
        $this->load->view('profile_psikolog');
    }
    
	public function index()
	{

		$this->load->view('welcome_message');
	}
=======


	 
	public function __construct(){
		parent::__construct();		
		$this->load->model('Consultant_model');
    
	}


    public function showProfile(){
		$data['consultants']= $this->Consultant_model->getDataConsultant();
        $this->load->view('profile_psikolog',$data);	
    }

	 
>>>>>>> Stashed changes
}
