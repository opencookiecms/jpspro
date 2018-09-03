<?php
defined('BASEPATH') OR exit('No direct script access allowed')
//
	class Stepone_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();

		}
		
		public function saveStepone($data){
			{
				$query = $this->db->get_where('dp_projek', array('id' => $id));
				return $query->row_array();
			}
			else {
				return FALSE;
			}
		}
	}
?>
