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
            switch ($this->session->userdata('role')) {
                case 'admin':
                    redirect('admin');
                    break;
                case 'consultants':
                    redirect('consultant/replyconsult');
                    break;
                case 'patients':
                    redirect('patient/consultpatient');
                    break;
                default:
                    break;
            }
        } else
            $this->load->view('home_view'); 
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            if ($this->Auth_model->doLogin())
                $data['status'] = 'success-login';
            else
                $data['status'] = 'error';
        } else {
            $data = array(
                'email' => form_error('email', '<p class="text-danger">', '</p>'),
				'password' => form_error('password', '<p class="text-danger">', '</p>'),
				'status' => 'validation_error'
			);
        }

        echo json_encode($data);
    }

    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[11]');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('email-regist', 'Email', 'required|valid_email|is_unique[patients.email]');
        $this->form_validation->set_rules('password-regist', 'Password', 'required');

        if ($this->form_validation->run()) {
            if ($this->Auth_model->register())
                $data['status'] = 'success-regist';
            else
                $data['status'] = 'error';
        } else {
            $data = array(
                'name' => form_error('name', '<p class="text-danger">', '</p>'),
                'gender' => form_error('gender', '<p class="text-danger">', '</p>'),
                'address' => form_error('address', '<p class="text-danger">', '</p>'),
                'phone' => form_error('phone', '<p class="text-danger">', '</p>'),
                'age' => form_error('age', '<p class="text-danger">', '</p>'),
                'email' => form_error('email-regist', '<p class="text-danger">', '</p>'),
				'password' => form_error('password-regist', '<p class="text-danger">', '</p>'),
				'status' => 'validation_error'
			);
        }

        echo json_encode($data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}