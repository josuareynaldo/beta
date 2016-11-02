<?php
	/**
	* 
	*/
	class Stakeholder extends CI_Controller
	{

		public function index(){
			$data['users'] = $this->user_model->get_data('users');
			$data['products'] = $this->user_model->get_data('products');
			$data['articles'] = $this->user_model->get_data('articles');
			 $data['form_replacements'] = $this->form_model->get_data('form_replacements');
			 $data['form_services'] = $this->form_model->get_data('form_services');
			 $data['owner_forms'] = $this->form_model->get_data('owner_forms');
			 $data['form_exchanges'] = $this->form_model->get_data('form_exchanges');
			$childs = array();
			foreach ($data['products'] as $product) {
				$articles = $this->user_model->get_products($product->serial_number);
				$childs[$product->serial_number] = array();
				foreach ($articles as $article) {

					if(array_key_exists($article->serial_number,$childs)){
	        			array_push($childs[$article->serial_number],$article);
	        		}else{
	        			$childs[$article->serial_number] = $article;	
	        		}
					
				}
				
			}

			$data['childs'] = $childs;

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

		public function see_more($id){
			$data['form_service'] = $this->form_model->get_byCondition('form_services',array('id'=>$id))->row();

		}

		public function button_see($id){
			$data['owner_form'] = $this->form_model->get_byCondition('owner_forms',array('id'=>$id))->row();

		}


		public function form_replacement(){
			$this->load->view('forms/form_replacements');
		}

		public function form_service(){
			$this->load->view('forms/form_services');
		}

		public function owner_form(){
			$this->load->view('forms/owner_forms');
		}


		public function form_exchange(){
			$this->load->view('forms/form_exchanges');
		}

	}

 ?>