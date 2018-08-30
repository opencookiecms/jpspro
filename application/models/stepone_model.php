<?php
defined('BASEPATH') OR exit('No direct script access allowed')
//
	class Stepone_model extends CI_Model {

		public function saveStepone($data){
			{
				$this->db->insert('dp_project', $data);
				$emp_id = $this->db->insertid();
			}

			return $id;
		}
	}
?>
