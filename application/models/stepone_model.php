<?php  
	

	class StepOne_model extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		public function get_stepone($id) {
			if($id != FALSE) {
				$query = $this->db->get_where('stepone', array('id' => $id));
				return $query->row_array();
			}
			else
				return FALSE;
		}
	}
?>