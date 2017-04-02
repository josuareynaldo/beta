<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{

		public function index(){
			$data['users'] = $this->get_users();
			$data['customers'] = $this->get_customers();
			$data['products'] = $this->get_products();
			$data['articles'] = $this->get_acc();
			$data['histories']= $this->get_history();
			$data['form_services'] = $this->get_services();
			$data['owner_forms'] = $this->get_owners();
			$data['form_exchanges'] = $this->get_exchanges();
			$data['trial_reqs'] = $this->get_trial_reqs();
			$data['trial_results'] = $this->get_trial_results();
			$data['reports'] = $this->get_reports();
			$childs = array();
			foreach ($data['products'] as $product) {
				$articles = $this->products_model->get_products($product->article_number_product);
				$childs[$product->article_number_product] = array();
				foreach ($articles as $article) {

					if(array_key_exists($article->article_number_product,$childs)){
	        			array_push($childs[$article->article_number_product],$article);
	        		}else{
	        			$childs[$article->article_number_product] = $article;	
	        		}
					
				}
				
			}

			$data['childs'] = $childs;

			// $data['products'] = $this->user_model->get_data('products');
			// $data['childs'] = $this->user_model->get_byCondition('products',array('serial_number'=>'123456'))->result();
			if($this->session->userdata('position')=='Stakeholder'){
				$this->load->view('stakeholder',$data);
			}

			else if($this->session->userdata('position')=='Tech_Manager'){
				$this->load->view('tech_manager',$data);
			}

			else if($this->session->userdata('position')=='Tech_User'){
				$this->load->view('tech_user',$data);
			}

			else if($this->session->userdata('position')=='Salesuser'){
				$this->load->view('salesuser',$data);
			}

			else if($this->session->userdata('position')=='Salesmanager'){
				$this->load->view('salesmanager',$data);
			}

			else if($this->session->userdata('position')=='Salesadmin'){
				$this->load->view('salesadmin',$data);
			}
		}

		public function get_users(){
			return $this->user_model->get_data('users');
		}

		public function get_customers(){
			return $this->customer_model->get_data('customers');
		}

		public function get_products(){
			return $this->products_model->get_data('products');
		}

		public function get_acc(){
			return $this->acc_model->get_data('acc');
		}

		public function get_history(){
			return $this->history_model->get_data('history');
		}

		public function get_services(){
			return $this->form_services_model->get_data('form_services');
		}

		public function get_exchanges(){
			return $this->form_exchanges_model->get_data('form_exchanges');
		}

		public function get_owners(){
			return $this->owner_form_model->get_data('owner_forms');
		}

		public function get_trial_reqs(){
			return $this->trial_reqs_model->get_data('trial_reqs');
		}

		public function get_trial_results(){
			return $this->trial_results_model->get_data('trial_results');
		}

		public function get_reports(){
			return $this->reports_model->get_data('reports');
		}
		
		public function register_user(){
			$this->load->view('register_user');
		}

		public function add_user(){
			$this->load->view('register_user');
			
			if($this->input->post('register')){
				$data= array(
						'name' => $this->input->post('name'),
						'password' => sha1($this->input->post('password')),
						'email' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'position' => $this->input->post('pos')
					);

				$this->user_model->insert_data('users',$data);
				$report=array(
						'report'=> $this->session->userdata('name').' has created an user account with name '.$this->input->post('name').' with the position as '.$this->input->post('pos')
					);
				$this->history_model->insert_data('history',$report);	
				redirect('user/index');

			}

			else{
				redirect('user/register_user');
			}
		}

		public function edit_user($id){
			$data['user'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_user',$data);
		}

		public function see_more($id){
			$data['form_services'] = $this->form_services_model->get_byCondition('form_services',array('id'=>$id))->row();
			$data['trial_reqs'] = $this->trial_reqs_model->get_byCondition('trial_reqs',array('id'=>$id))->row();
		}

		public function button_see($id){
			$data['owner_form'] = $this->owner_forms_model->get_byCondition('owner_forms',array('id'=>$id))->row();

		}

		public function btn_see($id){
			$data['form_exchange'] = $this->form_exchanges_model->get_byCondition('form_exchanges',array('id'=>$id))->row();

		}

		public function update_user(){
			if($this->input->post('update')){
				$data= array(
						 
						'password' => sha1($this->input->post('password')),
						'address' => $this->input->post('address')

					);
				 
				$this->user_model->update_data('users',$data,array('id'=>$this->input->post('id')));
				$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has edited an user account with name '.$this->input->post('name')
					);
				$this->history_model->insert_data('history',$report);
				redirect('user/index');

			}else{
				redirect('stakeholder/register_user');
			}
		}

		public function delete_user($id){
			$temp=$this->history_model->select_data('name','users',$id);
			$this->user_model->delete_data('users',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted an user account with name '.$temp->name
					);
			$this->history_model->insert_data('history',$report);
			redirect('user/index');

		}

		public function delete_history(){
			$this->user_model->truncate_table('history');
			redirect('user/index');
		}

	}

 ?>