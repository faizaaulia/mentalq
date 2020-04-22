<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {
 
    public function profile(){
        $this->load->view('profile_psikolog');
    }
    
	public function index()
	{

		$this->load->view('welcome_message');
	}
}
