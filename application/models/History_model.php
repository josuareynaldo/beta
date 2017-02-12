<?php 

	/**
	* 
	*/
	class History_model extends CI_Model
	{
		public function get_data($table = ''){
			return $this->db->get($table)->result();
		}

		public function insert_data($table = '',$data = array()){
			$this->db->insert($table,$data);
		}
		public function truncate($table = '', $data = array()){
			$this->db->truncate('history');
		}

	}

 ?>