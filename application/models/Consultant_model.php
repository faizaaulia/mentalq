
<?php
class Consultant_model extends CI_Model{
	    public function getDataConsultants() {
	        return $this->db->get('consultants')->result();
	    }

	    public function getConsultantProfile($noSTR) {
	        return $this->db->where('noSTR', $noSTR)->get('consultants')->row();
	    }

			public function getDataConsultant(){
				$noSTR=2147483647;
				return $this->db->where('noSTR',$noSTR)->get('consultants')->row();
			}
}
?>
