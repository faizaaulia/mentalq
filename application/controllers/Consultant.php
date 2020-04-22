<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultant extends CI_Controller {
        public function replyConsult()
        {
            $this->load->view('consult_consultant');
        }

        public function updateProfile()
        {
            $this->load->view('edit_profile_consultant');
        }
    }
