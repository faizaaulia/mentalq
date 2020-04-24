<?php

        class Patient_model extends CI_model{


            public function ubahDataPasien($idPasien)
            {
                $data = [
                    "namaPasien" => $this->input->post('namaPasien', true),
                    "email" => $this->input->post('email', true),
                    "password" => $this->input->post('password', true),
                    "gender" => $this->input->post('gender', true),
                    "alamat" => $this->input->post('alamat', true),
                    "noHP" => $this->input->post('noHP', true),
                    "umur" => $this->input->post('umur', true),
                ];
                //use query builder class to update data patient based on idPasien
                $this->db->where('idPasien', $idPasien);
                return $this->db->update('patients', $data);
                $this->db->where('idPasien',$idPasien)->update('patients',$data);
                if ($this->db->affected_rows()>0) {
                    return true;
                } else {
                    return false;
                }
            }
        }
?>