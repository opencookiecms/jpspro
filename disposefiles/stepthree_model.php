<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Stepthree_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function create($data){
			$this->db->insert('dp_gps', $data);
			return TRUE;
		}
	}
?>
