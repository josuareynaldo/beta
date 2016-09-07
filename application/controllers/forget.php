<?php  

		
	class Forget extends CI_Controller{
		public function index()
			{
				/*if (isset($_GET['info'])) {
		               $data['info'] = $_GET['info'];
		              }
				if (isset($_GET['error'])) {
		              $data['error'] = $_GET['error'];
		              }*/
				
				$this->load->view('forget');
				
			}
		public function email(){
				$email=$this->input->post('email');
				$user=$this->login_model->validate_email($email);
				if($user){

					$recovery_id=random_string('alnum',6);
					$this->load->library('email');
					$this->email->from('reinardowill@gmail.com','reinardowill@gmail.com');
					$this->email->to('$email');
					$this->email->subject('Reset Password');
					$message="This is your Recovery ID: " + $recovery_id;
					$this->email->message($message);
					$this->email->send();
					redirect('forget/recovery');
				}
				else{
					redirect('forget/index');
				}
		} 

		public function recovery()
		{
			$this->load->view('recovery_ID');
			
			if($this->input->post('insertID')){
				$recovery=$this->input->post('recovery_id');
				if(strcmp($recovery_id,$recovery)==0){
					redirect('forget/newPass');
				}
				else{
					redirect('forget/recovery');
				}
			}
			
		}

		public function newPass()
		{
			$this->load->view('forget_insertnewpass');
			if($this->input->post('updatePass')){
				$data=array(
				'password' => sha1($this->input->post('Npassword'))
				);
			$this->user_model->update_data('users',$data,array('password'=>$this->input->post('Npassword')));
			}
			
			redirect('login/index');

		}


		// public function doforget()
		// 	{
		// 		$this->load->helper('url');
		// 		$email= $_POST['email'];
		// 		$q = $this->db->query("select * from users where email='" . $email . "'");
		//         if ($q->num_rows > 0) {
		//             $r = $q->result();
		//             $user=$r[0];
		// 			$this->resetpassword($user);
		// 			$info= "Password has been reset and has been sent to email id: ". $email;
		// 			redirect('/index.php/login/forget?info=' . $info, 'refresh');
		//         }
		// 		$error= "The email id you entered not found on our database ";
		// 		redirect('/index.php/login/forget?error=' . $error, 'refresh');
				
		// 	} 


		// private function resetpassword($user)
		// 	{
		// 		date_default_timezone_set('GMT');
		// 		$this->load->helper('string');
		// 		$password= random_string('alnum', 16);
		// 		$this->db->where('id', $user->id);
		// 		$this->db->update('users',array('password'=>MD5($password)));
		// 		$this->load->library('email');
		// 		$this->email->from('cantreply@youdomain.com', 'Your name');
		// 		$this->email->to($user->email); 	
		// 		$this->email->subject('Password reset');
		// 		$this->email->message('You have requested the new password, Here is you new password:'. $password);	
		// 		$this->email->send();
		// 	} 
	}
		
?>
