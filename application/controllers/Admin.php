<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$data['main_view'] = 'admin_consultants_view';
			$data['profile'] = $this->Admin_model->getAdminProfile();
			$this->load->view('template_admin_view', $data);
		} else
			redirect('home');
	}
	
	public function patients() {
		$data['main_view'] = 'admin_patients_view';
		$data['profile'] = $this->Admin_model->getAdminProfile();
		$this->load->view('template_admin_view', $data);
	}

	public function detailConsultant($strnumber) {
		$res = $this->Admin_model->detailConsultant($strnumber);
		echo json_encode($res);
	}

	public function deleteConsultant($strnumber) {
		$this->Admin_model->deleteConsultant($strnumber);
	}

	public function fetchConsultants() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$query = $this->db->get("consultants");

		$data = [];

		foreach ($query->result() as $row) {
			$data[] = array(
					$row->photo,
					$row->namaConsultant,
					$row->jenisPsikologi,
					$row->email,
					$row->noHP,
					$row->noSTR
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}

	public function fetchPatients() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$query = $this->db->get("patients");

		$data = [];

		foreach ($query->result() as $row) {
			$data[] = array(
					$row->namaPasien,
					$row->email,
					$row->gender,
					$row->alamat,
					$row->noHP,
					$row->umur
			);
		}

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}

	public function editConsultant($strnumber) {
		$res = $this->Admin_model->detailConsultant($strnumber);
		echo json_encode($res);
	}

	public function updateConsultant($strnumber) {
		$detail = $this->Admin_model->detailConsultant($strnumber);
		if ($this->input->post('strnumber') != $strnumber)
			$is_unique_str = '|is_unique[consultants.noSTR]';
		else
			$is_unique_str = '';
		if ($this->input->post('email') != $detail->email)
			$is_unique_email = '|is_unique[consultants.email]';
		else
			$is_unique_email = '';
        $this->form_validation->set_rules('strnumber', 'STR Number', 'required'.$is_unique_str);
		$this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('consultantType', 'Consultant Type', 'required');
        $this->form_validation->set_rules('workplace', 'Workplace', 'required');
        $this->form_validation->set_rules('alumni', 'Alumni', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|min_length[10]|max_length[11]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'.$is_unique_email);
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run()) {
			$data = array(
				'noSTR' => $this->input->post('strnumber'),
				'namaConsultant' => $this->input->post('name'),
				'jenisPsikologi' => $this->input->post('consultantType'),
				'gender' => $this->input->post('gender'),
				'tempatPraktik' => $this->input->post('workplace'),
				'alumni' => $this->input->post('alumni'),
				'noHP' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$this->Admin_model->updateConsultant($strnumber,$data);
			$json['status'] = 'success';
		} else {
			$json = array(
                'strnumber' => form_error('strnumber', '<p class="text-danger">', '</p>'),
                'name' => form_error('name', '<p class="text-danger">', '</p>'),
                'consultantType' => form_error('consultantType', '<p class="text-danger">', '</p>'),
                'workplace' => form_error('workplace', '<p class="text-danger">', '</p>'),
                'alumni' => form_error('alumni', '<p class="text-danger">', '</p>'),
                'phone' => form_error('phone', '<p class="text-danger">', '</p>'),
                'email' => form_error('email', '<p class="text-danger">', '</p>'),
				'password' => form_error('password', '<p class="text-danger">', '</p>'),
				'status' => 'error'
			);
		}
		echo json_encode($json);
	}

	public function addConsultant() {
		$this->form_validation->set_rules('strnumber', 'STR Number', 'required|is_unique[consultants.noSTR]');
		$this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('consultantType', 'Consultant Type', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('workplace', 'Workplace', 'required');
        $this->form_validation->set_rules('alumni', 'Alumni', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|min_length[10]|max_length[11]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[consultants.email]|is_unique[patients.email]|is_unique[admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run()) {
			$data = array(
				'noSTR' => $this->input->post('strnumber'),
				'namaConsultant' => $this->input->post('name'),
				'jenisPsikologi' => $this->input->post('consultantType'),
				'gender' => $this->input->post('gender'),
				'tempatPraktik' => $this->input->post('workplace'),
				'alumni' => $this->input->post('alumni'),
				'noHP' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'photo' => $this->input->post('gender') == 'male' ? 'avatarmale.jpg' : 'avatarfemale.jpg', //default photo
				'lamaPsikologi' => '1 tahun',
				'schedule' => date("Y-m-d"),
				'jamKerja' => '12'
			);
			$this->Admin_model->insertConsultant($data);
			$json['status'] = 'success';
		} else {
			$json = array(
                'strnumber' => form_error('strnumber', '<p class="text-danger">', '</p>'),
                'name' => form_error('name', '<p class="text-danger">', '</p>'),
                'consultantType' => form_error('consultantType', '<p class="text-danger">', '</p>'),
                'gender' => form_error('gender', '<p class="text-danger">', '</p>'),
                'workplace' => form_error('workplace', '<p class="text-danger">', '</p>'),
                'alumni' => form_error('alumni', '<p class="text-danger">', '</p>'),
                'phone' => form_error('phone', '<p class="text-danger">', '</p>'),
                'email' => form_error('email', '<p class="text-danger">', '</p>'),
				'password' => form_error('password', '<p class="text-danger">', '</p>'),
				'status' => 'error'
			);
		}
		echo json_encode($json);
	}

}
