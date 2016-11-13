<?php
	/**
	* 
	*/
	class Manager extends CI_Controller
	{

		public function index(){
			$data['users'] = $this->user_model->get_data('users');
			$data['products'] = $this->user_model->get_data('products');
			$data['articles'] = $this->user_model->get_data('articles');
			$data['accessories'] = $this->user_model->get_data('accessories');
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

			// $data['products'] = $this->user_model->get_data('products');
			// $data['childs'] = $this->user_model->get_byCondition('products',array('serial_number'=>'123456'))->result();
			$this->load->view('manager',$data);
			
		}	
		
		public function register(){
			$this->load->view('register_user');
		}

		public function add_user(){
			if($this->input->post('register')){
				$data= array(
						'name' => $this->input->post('name'),
						'password' => sha1($this->input->post('password')),
						'email' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'position' => $this->input->post('pos')
					);

				$this->user_model->insert_data('users',$data);
				redirect('manager/index');

			}else{
				redirect('manager/register_user');
			}
		}

		public function edit($id){
			$data['user'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_user',$data);
		}

		public function edit_acc($id){
			$data['accessories'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_acc',$data);
		}

		public function see_more($id){
			$data['form_service'] = $this->form_model->get_byCondition('form_services',array('id'=>$id))->row();

		}

		public function button_see($id){
			$data['owner_form'] = $this->form_model->get_byCondition('owner_forms',array('id'=>$id))->row();

		}

		public function btn_see($id){
			$data['form_exchange'] = $this->form_model->get_byCondition('form_exchanges',array('id'=>$id))->row();

		}

		public function update(){
			if($this->input->post('update')){
				$data= array(
						 
						'password' => sha1($this->input->post('password')),
						'address' => $this->input->post('address')

					);
				 
				$this->user_model->update_data('users',$data,array('id'=>$this->input->post('id')));
				redirect('manager/index');

			}else{
				redirect('manager/register_user');
			}
		}

		public function delete($id){
			$this->user_model->delete_data('users',array('id'=>$id));
			redirect('manager/index');

		}



		public function deleteProduct($id){
			$this->user_model->delete_data('products',array('id'=>$id));
			redirect('manager/index');

		}

		public function accessories(){
			$this->load->view('accessories');
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


		public function add_accessories(){
			if($this->input->post('save')){
				$data= array(
						'name' => $this->input->post('name'),
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'parts' => $this->input->post('parts')
					);
				$this->form_model->insert_data('accessories',$data);
				redirect('manager/index');

			}else{
				redirect('manager/accessories');
			}
		}


		public function add_form_replacement(){
			if($this->input->post('save')){
				$data= array(
						'exchange_id' => $this->input->post('exchange_id'),
						'article_number' => $this->input->post('article_number'),
						'date_record' => $this->input->post('date_record'),
						'description' => $this->input->post('description'),
						'technician' => $this->input->post('technician'),
						'serial_number' => $this->input->post('serial_number'),
						'date_install' => $this->input->post('date_install'),
						'date_replace' => $this->input->post('date_replace'),
						'problem' => $this->input->post('problem')


					);
				$this->form_model->insert_data('form_replacements',$data);
				redirect('user/index');

			}else{
				redirect('user/form_replacement');
			}
		}

		public function add_form_service(){
			if($this->input->post('save')){
				$data= array(
						'date_service' => $this->input->post('date_service'),
						'serial_number' => $this->input->post('serial_number'),
						'printer' => $this->input->post('printer'),
						'date_install' => $this->input->post('date_install'),
						'status' => $this->input->post('status'),
						'ink_number' => $this->input->post('ink_number'),
						'solvent_number' => $this->input->post('solvent_number'),
						'technician' => $this->input->post('technician'),
						'visco_act' => $this->input->post('visco_act'),
						'pres_act' => $this->input->post('pres_act'),
						'mb_value' => $this->input->post('mb_value'),
						'tmp' => $this->input->post('tmp'),
						'bo_cur' => $this->input->post('bo_cur'),
						'bo_ref' => $this->input->post('bo_ref'),
						'date_ls' => $this->input->post('date_ls'),
						'hour_ls' => $this->input->post('hour_ls'),
						'total_hour' => $this->input->post('total_hour'),
						'problem' => $this->input->post('problem'),
						'replace_part' => $this->input->post('replace_part'),
						'service_work' => $this->input->post('service_work')

					);
				$this->form_model->insert_data('form_services',$data);
				redirect('user/index');

			}else{
				redirect('user/form_service');
			}
		}


		public function add_owner_form(){
			if($this->input->post('save')){
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'date_install' => $this->input->post('date_install'),
						'company' => $this->input->post('company'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'zipcode' => $this->input->post('zipcode'),
						'contact' => $this->input->post('contact'),
						'telp' => $this->input->post('telp'),
						'fax' => $this->input->post('fax'),
						'email' => $this->input->post('email'),
						'industry' => $this->input->post('industry'),
						'material' => $this->input->post('material'),
						'description' => $this->input->post('description'),
						'ink_number' => $this->input->post('ink_number'),
						'solvent_number' => $this->input->post('solvent_number'),
						'distributor' => $this->input->post('distributor'),
						'cust' => $this->input->post('cust'),
						'date' => $this->input->post('date')

					);
				$this->form_model->insert_data('owner_forms',$data);
				redirect('user/index');

			}else{
				redirect('user/owner_form');
			}
		}


		public function add_form_exchange(){
			// echo "<pre>";
			// print_r($this->input->post());
			// echo "</pre>";
			// $test = implode(', ', $this->input->post('descr'));
			// echo $test;
			// exit;
			if($this->input->post('save')){
				$data= array(
						'article_number' => $this->input->post('article_number'),
						'serial_number' => $this->input->post('serial_number'),
						'date_replace' => $this->input->post('date_replace'),
						'run_time' => $this->input->post('run_time'),
						'description' => $this->input->post('description'),
						'distributor' => $this->input->post('distributor'),
						'technician' => $this->input->post('technician'),
						'cust' => $this->input->post('cust'),
						'stock' => $this->input->post('stock'),
						'dismantled' => $this->input->post('dismantled'),
						'descr' => implode(', ',  $this->input->post('descr')),
						'cond' => implode(', ', $this->input->post('cond')),
						'scrapping' => $this->input->post('scrapping'),
						'warranty' => $this->input->post('warranty'),
						'contact' => $this->input->post('contact'),
						'date' => $this->input->post('date')

					);
				$this->form_model->insert_data('form_exchanges',$data);
				redirect('user/index');

			}else{
				redirect('user/form_exchange');
			}
		}


		public function delete_acc($id){
			$this->form_model->delete_data('accessories',array('id'=>$id));
			redirect('manager/index');
		}


		public function delete_replacement($id){
			$this->form_model->delete_data('form_replacements',array('id'=>$id));
			redirect('manager/index');
		}

		public function delete_service($id){
			$this->form_model->delete_data('form_services',array('id'=>$id));
			redirect('manager/index');
		}

		public function delete_owner($id){
			$this->form_model->delete_data('owner_forms',array('id'=>$id));
			redirect('manager/index');
		}

		public function delete_exchange($id){
			$this->form_model->delete_data('form_exchanges',array('id'=>$id));
			redirect('manager/index');
		}

		public function save_replacement($id){
		$data['form_replacement'] = $this->form_model->get_byCondition('form_replacements',array('id'=>$id))->row();
        //load the view and saved it into $html variable
        $html=$this->load->view('pdf/form_replacementPDF', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "form_replacement.pdf";
 
        //load mPDF library
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		}

		public function save_service($id){
		$data['form_service'] = $this->form_model->get_byCondition('form_services',array('id'=>$id))->row();
        //load the view and saved it into $html variable
        $html=$this->load->view('pdf/form_servicePDF', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "form_service.pdf";
 
        //load mPDF library
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		}

		public function save_owner($id){
		$data['owner_form'] = $this->form_model->get_byCondition('owner_forms',array('id'=>$id))->row();
        //load the view and saved it into $html variable
        $html=$this->load->view('pdf/owner_formPDF', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "owner_form.pdf";
 
        //load mPDF library
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		}


		public function save_exchange($id){
		$data['form_exchange'] = $this->form_model->get_byCondition('form_exchanges',array('id'=>$id))->row();
        //load the view and saved it into $html variable
        $html=$this->load->view('pdf/form_exchangePDF', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "form_exchange.pdf";
 
        //load mPDF library
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		}



	}

 ?>