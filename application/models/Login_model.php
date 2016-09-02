<?php 

	/**
	* 
	*/
	class Login_model extends CI_Model
	{
		
		public function validate_user($username,$password){
			return $this->db->get_where('users',array('name'=> $username,
												'password' => $password
				))->row();
		}


	}

 ?>