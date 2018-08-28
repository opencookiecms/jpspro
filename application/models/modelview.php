<?php 

	/**
	* 
	*/
	class modelview extends CI_Model
	{
		
		public function getData()
		{
			$query = $this->db->get('dp_projek');
			return $query->result();
		}
	}

?>