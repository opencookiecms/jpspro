<?php
defined('BASEPATH') OR exit('No direct script access allowed')

	class Stepone_model extends CI_Model {

		public function process($data)
		{
			$this->load->database();
			$this->db->insert('stepsatu',$data);
		}
	}
?>
