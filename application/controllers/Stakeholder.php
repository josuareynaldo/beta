<?php
	/**
	* 
	*/
	class Stakeholder extends CI_Controller
	{

		public function index(){
			$data['users'] = $this->user_model->get_data('users');
			$data['products'] = $this->user_model->get_data('products');


			$this->load->view('stakeholder',$data);
		}	
		
		public function register(){
			$this->load->view('register_user');
		}

		public function add_user(){
			if($this->input->post('register')){
				$data= array(
						'name' => $this->input->post('name'),
						'password' => sha1($this->input->post('password')),
						'address' => $this->input->post('address'),
						'position' => $this->input->post('pos')
					);

				$this->user_model->insert_data('users',$data);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/register_user');
			}
		}

		public function edit($id){
			$data['user'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_user',$data);
		}

		public function update(){
			if($this->input->post('update')){
				$data= array(
						 
						'password' => sha1($this->input->post('password')),
						'address' => $this->input->post('address')

					);
				 
				$this->user_model->update_data('users',$data,array('id'=>$this->input->post('id')));
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/register_user');
			}
		}

		public function delete($id){
			$this->user_model->delete_data('users',array('id'=>$id));
			redirect('stakeholder/index');

		}

	}

 ?>