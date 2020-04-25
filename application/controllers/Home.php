<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

    public function index(){
        if ($this->session->userdata('logged_in')) {
            $data['main_view'] = 'home_view';
            $this->load->view('template_view',$data); 
        } else {
            $data['main_view'] = 'home_view';
            $this->load->view('template_view',$data); 
        }
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            if ($this->Auth_model->doLogin()) {
                $data['status'] = 'success';
            } else {
                $data['status'] = 'error';
            }
        } else {
            $data = array(
                'email' => form_error('email', '<p class="text-danger">', '</p>'),
				'password' => form_error('password', '<p class="text-danger">', '</p>'),
				'status' => 'validation_error'
			);
        }

        echo json_encode($data);
    }

    public function getUser($email,$role) {
        return $this->Auth_model->getUser($email,$role);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}