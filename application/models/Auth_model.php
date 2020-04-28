<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function doLogin() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->where('email', $email)
						  ->where('password', $password)
						  ->get('admin');
        $consultants = $this->db->where('email', $email)
						  ->where('password', $password)
						  ->get('consultants');
        $patients = $this->db->where('email', $email)
						  ->where('password', $password)
						  ->get('patients');

        if ($admin->num_rows() > 0 || $consultants->num_rows() > 0 || $patients->num_rows() > 0) {
            $data = array(
                'email' => $email,
                'logged_in' => TRUE,
            );
            if ($admin->num_rows() > 0) {
                $data['role'] = 'admin';
                $data['id'] = $admin->row()->idAdmin;
            }
            if ($consultants->num_rows() > 0) {
                $data['role'] = 'consultants';
                $data['id'] = $consultants->row()->noSTR;
            }
            if ($patients->num_rows() > 0) {
                $data['role'] = 'patients';
                $data['id'] = $patients->row()->idPasien;
            }
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    public function getUser($email,$role) {
        return $this->db->where('email',$email)
                        ->get($role)->row();
    }
}