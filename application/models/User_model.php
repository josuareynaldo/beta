<?php 

	/**
	* 
	*/
	class User_model extends CI_Model
	{
		
		public function get_data($table = ''){
			return $this->db->get($table)->result();
		}

		public function insert_data($table = '',$data = array()){
			$this->db->insert($table,$data);
		}

		public function get_byCondition($table = '',$condition = array()){
			return $this->db->get_where($table,$condition);
		}

		public function update_data($table = '',$data = array(),$condition = array()){
			$this->db->update($table,$data,$condition);
		}

		public function delete_data($table = '',$condition = array()){
			$this->db->delete($table,$condition);
		}
	}

 ?>