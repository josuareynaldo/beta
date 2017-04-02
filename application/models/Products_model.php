<?php 

	/**
	* 
	*/
	class Products_model extends CI_Model
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
		public function select_data($column= '',$table= '',$where= ''){
			$this->db->select($column);
			$this->db->from($table);
			$this->db->where('id',$where);
			return $this->db->get()->row();
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

		function get_products($article_number){
			$this->db->select('acc.*,products.product_name');
			$this->db->from('products');
			$this->db->join('acc', 'acc.article_number_product = products.article_number_product');
			$this->db->where('products.article_number_product',$article_number);
			return $this->db->get()->result();
		}

		function lookup($table,$column,$keyword)
		{
			$this->db->select('*');
			$this->db->like($column, $keyword);
			$query = $this->db->get($table);

			return $query->result_array();
		}

	}

 ?>