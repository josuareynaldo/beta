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
		function totalRows($table = ''){
		return $this->db->get($table)->num_rows();
		}

		function get_products($serial_number){
			$this->db->select('articles.*,products.product_name');
			$this->db->from('products');
			$this->db->join('articles', 'articles.serial_number = products.serial_number');
			$this->db->where('products.serial_number',$serial_number);
			return $this->db->get()->result();
		}

		function lookup($table ='',$search){
			$this->db->select($table,'*');
			$this->db->like('name', $search);
			$query = $this->db->get('');

			return $query->result_array();
		}

	}

 ?>