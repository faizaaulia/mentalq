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
		$data['main_view'] = 'admin_consultants_view';
		$this->load->view('template_admin_view', $data);
	}

	public function patients() {
		$data['patients'] = $this->Admin_model->getDataPatients();
		$data['main_view'] = 'admin_patients_view';
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

}
