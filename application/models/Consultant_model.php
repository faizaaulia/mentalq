<?php 
 
class Consultant_model extends CI_Model{
	function getDataConsultant(){
		$noSTR=2147483647;
		return $this->db->where('noSTR',$noSTR)->get('consultants')->row();
		
	}
}