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

		public function validate_email($email){
			return $this->db->get_where('users',array('email'=>$email))->row();
		}
	}

 ?>