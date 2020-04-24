<?php

        class Patient_model extends CI_model{

            public function getProfilePatient(){
                $idPasien= '1';
                return $this->db->where('idPasien',$idPasien)->get('patients')->row();
            }
            

            //Mendapatkan data terbaru dari Pasien
            public function ubahDataPasien()
            {
                $data =array(
                     
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'noHP' => $this->input->post('noHP'),
                    'umur' => $this->input->post('umur'),
                );
                //use query builder class to update data patient based on idPasien
                 $this->db->where('idPasien','1')->update('patients',$data);
            }
        }
?>