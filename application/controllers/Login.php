<?php 

	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		public function index(){
			$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
			$this->output->set_header("Pragma: no-cache");

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
								'position' => $user->position,
								'isLogged' => true
					);
				$this->session->set_userdata($data_session);
				if($this->session->userdata('position')=='Manager'){
					redirect('manager/index');
				}
				elseif ($this->session->userdata('position')=='Stakeholder') {
					redirect('stakeholder/index');
				}
				else{
					redirect('user/index'); //(nama controller / nama method)
				}
				
			}else{
				redirect('login/index'); //(nama controller / nama method)
			}

		}


		public function log_out(){
			$this->session->sess_destroy();
			redirect('login/index');

		}



	}

 ?>