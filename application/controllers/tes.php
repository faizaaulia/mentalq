<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tes extends CI_Controller{
    public function index(){
        $this->load->view('ProfilePasien');
    }
    public function home(){
        $this->load->view('home');
    }
}