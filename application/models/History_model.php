<?php 

	/**
	* 
	*/
	class History_model extends CI_Model
	{
		
		public function get_data($table = ''){
			return $this->db->get($table)->result();
		}

		public function select_data($column= '',$table= '',$where= ''){
			$this->db->select($column);
			$this->db->from($table);
			$this->db->where('id',$where);
			return $this->db->get()->row();
		}

		public function insert_data($table = '',$data = array()){
			$this->db->insert($table,$data);
		}
		public function truncate($table = '', $data = array()){
			$this->db->truncate('history');
		}

	}

 ?>