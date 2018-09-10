<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stepone_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function create($data){
		$this->db->insert('dp_projek', $data);
		return TRUE;
	}

	function getData()
	{
		$query = $this->db->get('dp_projek');       

		return $query->result();

	}
}
?>
