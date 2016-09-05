<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{

		public function index(){
			// $data['users'] = $this->user_model->get_data('users');
			

			$this->load->view('user');
		}	
		
		

	}

 ?>