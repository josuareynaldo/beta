<?php 

	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		public function index(){
			$this->load->view('login');
		}

		public function log_in(){
			$username=$this->input->post('username');
			$password=sha1($this->input->post('pass'));

			$user=$this->login_model->validate_user($username,$password);
			if($user){
				$data_session=array(
								'id' => $user->id,
								'name' => $user->name,
								'isLogged' => true
					);
				$this->session->set_userdata($data_session);
				redirect('user/index');
			}else{
				redirect('login/index');
			}

		}

		public function log_out(){
			$this->session->sess_destroy();
			redirect('login/index');

		}



	}

 ?>