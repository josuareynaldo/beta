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
			$data['histories']= $this->user_model->get_data('history');
			$data['form_replacements'] = $this->form_model->get_data('form_replacements');
			$data['form_services'] = $this->form_model->get_data('form_services');
			$data['owner_forms'] = $this->form_model->get_data('owner_forms');
			$data['form_exchanges'] = $this->form_model->get_data('form_exchanges');
			$childs = array();
			foreach ($data['products'] as $product) {
				$articles = $this->user_model->get_products($product->article_number_machine);
				$childs[$product->article_number_machine] = array();
				foreach ($articles as $article) {

					if(array_key_exists($article->article_number_machine,$childs)){
	        			array_push($childs[$article->article_number_machine],$article);
	        		}else{
	        			$childs[$article->article_number_machine] = $article;	
	        		}
					
				}
				
			}

			$data['childs'] = $childs;

			// $data['products'] = $this->user_model->get_data('products');
			// $data['childs'] = $this->user_model->get_byCondition('products',array('serial_number'=>'123456'))->result();
			$this->load->view('stakeholder',$data);
			
		}	

		public function lookupParts()
			{
				$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->m_autocomplete->lookup('articles','article_number_part',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['article_number_part']));
								$new_row['value0'] = htmlentities(stripcslashes($row['serial_number']));
								$new_row['value']  = htmlentities(stripcslashes($row['description']));
								$new_row['value2'] = htmlentities(stripcslashes($row['service_date']));
								$new_row['value3'] = htmlentities(stripcslashes($row['date_install']));
								$new_row['value4'] = htmlentities(stripcslashes($row['image_name']));
								$new_row['value5'] = htmlentities(stripcslashes($row['article_number_machine']));
								$row_set[] = $new_row;
							}
							echo json_encode($row_set);
					}
				}


			}
		public function lookupProduct()
		{
			$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->m_autocomplete->lookup('products','article_number_machine',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['article_number_machine']));
								$row_set[] = $new_row;
							}
							echo json_encode($row_set);
					}
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
				$report=array(
						'report'=> $this->session->userdata('name').' has created an user account with name '.$this->input->post('name').' with the position as '.$this->input->post('pos')
					);
				$this->user_model->insert_data('history',$report);	
			$this->user_model->insert_data('history',$report);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/register_user');
			}
		}

		public function edit($id){
			$data['user'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_user',$data);
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
				$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has edited an user account with name '.$this->input->post('name')
					);
				$this->user_model->insert_data('history',$report);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/register_user');
			}
		}

		public function delete($id){
			$temp=$this->user_model->select_data('name','users',$id);
			$this->user_model->delete_data('users',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted an user account with name '.$temp->name
					);
			$this->user_model->insert_data('history',$report);
			redirect('stakeholder/index');

		}

		public function addpart(){
		if($this->input->post('register_part'))
			$value=$this->input->post('select');
			redirect('product/register_part/'.$value);
		}


		public function deleteProduct($id){
			$this->user_model->delete_data('products',array('id'=>$id));
			redirect('stakeholder/index');

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

		 public function trial_req(){
		 	$this->load->view('forms/trial_reqs');
		 }

		public function trial_result(){
		 	$this->load->view('forms/trial_results');
		 }

		  public function customer(){
		 	$this->load->view('forms/customers');
		 }

		 public function report(){
		 	$this->load->view('forms/reports');
		 }



		public function add_form_replacement(){
			if($this->input->post('save')){
				$query1 = $this->form_model->lookup('products','article_number',$this->input->post('article_number'));
				$query2 = $this->form_model->lookup('articles','serial_number',$this->input->post('serial_number'));
				if(count($query1)>0 && count($query2)>0){
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
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form replacement with Exchange Id '.$this->input->post('exchange_id')
						);
					$this->user_model->insert_data('history',$report);
					redirect('stakeholder/index');
				}
				else{
					redirect('stakeholder/form_replacement');
				}
				
			}

			else{
				redirect('stakeholder/form_replacement');
			}
		}

		public function add_form_service(){
			if($this->input->post('save')){
				$query2 = $this->form_model->lookup('articles','article_number_part',$this->input->post('serial_number'));
				if(count($query2)>0){
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
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form service with Service Date '.$this->input->post('date_service')
						);
					$this->user_model->insert_data('history',$report);
					redirect('stakeholder/index');
				}
				else{
					redirect('stakeholder/form_service');
				}

			}else{
				redirect('stakeholder/form_service');
			}
		}


		public function add_owner_form(){
			$query1 = $this->form_model->lookup('products','article_number_machine',$this->input->post('article_number'));
			$query2 = $this->form_model->lookup('articles','article_number_part',$this->input->post('serial_number'));
			if(count($query1)>0 && count($query2)>0){
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
				$report=array(
						'report'=> $this->session->userdata('name').' has inserted a new owner form with serial number '.$this->input->post('serial_number')
					);
				$this->user_model->insert_data('history',$report);
				redirect('stakeholder/index');
			}
			else{
				redirect('stakeholder/owner_form');
			}

			}else{
				redirect('stakeholder/owner_form');
			}
		}


		public function add_form_exchange(){
			if($this->input->post('save')){
				$query1 = $this->form_model->lookup('products','article_number_machine',$this->input->post('article_number'));
				$query2 = $this->form_model->lookup('articles','article_number_part',$this->input->post('serial_number'));
				if(count($query1)>0 && count($query2)>0){
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
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form exchange with article number '.$this->input->post('article_number')
						);
					$this->user_model->insert_data('history',$report);
					redirect('stakeholder/index');
				}

				else{
					redirect('stakeholder/form_exchange');
					}
				}
				
			else{
				redirect('stakeholder/form_exchange');
			}
		}

		 public function add_trial_req(){
			if($this->input->post('save')){
				$data= array(
						'trial_no' => $this->input->post('trial_no'),
						'date_start' => $this->input->post('date_start'),
						'date_end' => $this->input->post('date_end'),
						'company' => $this->input->post('company'),
						'street' => $this->input->post('street'),
						'contact' => $this->input->post('contact'),
						'profession' => $this->input->post('profession'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'bus_field' => $this->input->post('bus_field'),
						'machine_type' => implode(', ',	$this->input->post('machine_type')),
						'ink_type' => $this->input->post('ink_type'),
						'solvent_type' => $this->input->post('solvent_type'),
						'material' => implode(', ', $this->input->post('material')),
						'printing_app' => implode(', ', $this->input->post('printing_app')),
						'acc_supp' => implode(', ', $this->input->post('acc_supp')),
						'sensor_type' => implode(', ', $this->input->post('sensor_type')),
						'encoder' => implode(', ', $this->input->post('encoder')),
						'sales_note' => $this->input->post('sales_note'),
						'tech_note' => $this->input->post('tech_note')


					);
				$this->form_model->insert_data('trial_reqs',$data);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/trial_req');
			}
		}

		public function add_trial_result(){
			if($this->input->post('save')){
				$data= array(
						'result_no' => $this->input->post('result_no'),
						'company' => $this->input->post('company'),
						'street' => $this->input->post('street'),
						'contact' => $this->input->post('contact'),
						'profession' => $this->input->post('profession'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'bus_field' => $this->input->post('bus_field'),
						'machine_type' => implode(', ',	$this->input->post('machine_type')),
						'ink_type' => $this->input->post('ink_type'),
						'solvent_type' => $this->input->post('solvent_type'),
						'material' => implode(', ', $this->input->post('material')),
						'printing_app' => implode(', ', $this->input->post('printing_app')),
						'acc_supp' => implode(', ', $this->input->post('acc_supp')),
						'sensor_type' => implode(', ', $this->input->post('sensor_type')),
						'encoder' => implode(', ', $this->input->post('encoder')),
						'print_char' => $this->input->post('print_char'),
						'dots' => $this->input->post('dots'),
						'counter_start' => $this->input->post('counter_start'),
						'counter_end' => $this->input->post('counter_end'),
						'total_counter' => $this->input->post('total_counter'),
						'date_start' => $this->input->post('date_start'),
						'date_end' => $this->input->post('date_end'),
						'time_start' => $this->input->post('time_start'),
						'time_end' => $this->input->post('time_end'),
						'ink' => $this->input->post('ink'),
						'solvent' => $this->input->post('solvent'),
						'temperature' => $this->input->post('temperature'),
						'humidity' => $this->input->post('humidity'),
						'result' => $this->input->post('result'),
						'customer' => $this->input->post('customer'),


					);
				$this->form_model->insert_data('trial_results',$data);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/trial_result');
			}
		}

		 public function add_customer(){
			if($this->input->post('save')){
				$data= array(
						'company' => $this->input->post('company'),
						'address' => $this->input->post('address'),
						'telp' => $this->input->post('telp'),
						'fax' => $this->input->post('fax'),
						'hp' => $this->input->post('hp'),
						'email' => $this->input->post('email'),
						'sales' => $this->input->post('sales')
					);
				$this->form_model->insert_data('customers',$data);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/customer');
			}
		}

		public function add_report(){
			if($this->input->post('save')){
				$data= array(
						'sales_name' => $this->input->post('sales_name'),
						'date_report' => $this->input->post('date_report'),
						'date_info' => $this->input->post('date_info'),
						'customer' => $this->input->post('customer'),
						'report' => $this->input->post('report'),
						'action_plan' => $this->input->post('action_plan'),


					);
				$this->form_model->insert_data('reports',$data);
				redirect('stakeholder/index');

			}else{
				redirect('stakeholder/report');
			}
		}



		public function delete_replacement($id){
			$temp=$this->user_model->select_data('exchange_id','form_replacements',$id);
			$this->form_model->delete_data('form_replacements',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a replacement form with exchange ID '.$temp->exchange_id
					);
			$this->user_model->insert_data('history',$report);
			redirect('stakeholder/index');
		}

		public function delete_service($id){
			$temp=$this->user_model->select_data('date_service','form_services',$id);
			$this->form_model->delete_data('form_services',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with install date '.$temp->date_service
					);
			$this->user_model->insert_data('history',$report);
			redirect('stakeholder/index');
		}

		public function delete_owner($id){
			$temp=$this->user_model->select_data('serial_number','owner_forms',$id);
			$this->form_model->delete_data('owner_forms',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with serial number '.$temp->serial_number
					);
			$this->user_model->insert_data('history',$report);
			redirect('stakeholder/index');
		}

		public function delete_exchange($id){
			$temp=$this->user_model->select_data('article_number','form_exchanges',$id);
			$this->form_model->delete_data('form_exchanges',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with article number '.$temp->article_number
					);
			$this->user_model->insert_data('history',$report);
			redirect('stakeholder/index');
		}

		public function delete_trial_req($id){
			$this->form_model->delete_data('trial_reqs',array('id'=>$id));
			redirect('stakeholder/index');
		 }

		public function delete_trial_result($id){
			$this->form_model->delete_data('trial_results',array('id'=>$id));
			redirect('stakeholder/index');
		 }

		 public function delete_customer($id){
			$this->form_model->delete_data('customers',array('id'=>$id));
			redirect('stakeholder/index');
		 }

		 public function delete_report($id){
			$this->form_model->delete_data('reports',array('id'=>$id));
			redirect('stakeholder/index');
		 }


		public function save_replacement($id){
		$temp=$this->user_model->select_data('exchange_id','form_replacements',$id);
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
        $report=array(
						'report'=> $this->session->userdata('name').' has saved a replacement form with exchange ID '.$temp->exchange_id
					);
		$this->user_model->insert_data('history',$report);

		}

		public function save_service($id){
		$temp=$this->user_model->select_data('date_service','form_services',$id);
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
        $report=array(
						'report'=> $this->session->userdata('name').' has saved a service form with install date '.$temp->date_service
					);
		$this->user_model->insert_data('history',$report);        
		}

		public function save_owner($id){
		$temp=$this->user_model->select_data('serial_number','owner_forms',$id);
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
        $report=array(
						'report'=> $this->session->userdata('name').' has saved a service form with article number '.$temp->article_number
					);
			$this->user_model->insert_data('history',$report);        
		}


		public function save_exchange($id){
		$temp=$this->user_model->select_data('article_number','form_exchanges',$id);
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
        $report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has saved a service form with article number '.$temp->article_number
					);
		$this->user_model->insert_data('history',$report);        
		}


		public function save_trial_req($id){
			 $data['trial_req'] = $this->form_model->get_byCondition('trial_reqs',array('id'=>$id))->row();
	  			//load the view and saved it into $html variable
	         $html=$this->load->view('pdf/trial_reqPDF', $data, true);
	 
	        //this the the PDF filename that user will get to download
	        $pdfFilePath = "trial_req.pdf";
	 
	        //load mPDF library
	 
	       //generate the PDF from the given html
	         $this->m_pdf->pdf->WriteHTML($html);
	        //download it.
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
	 	}

		public function save_trial_result($id){
			 $data['trial_result'] = $this->form_model->get_byCondition('trial_results',array('id'=>$id))->row();
	  			//load the view and saved it into $html variable
	         $html=$this->load->view('pdf/trial_resultPDF', $data, true);
	 
	        //this the the PDF filename that user will get to download
	        $pdfFilePath = "trial_req.pdf";
	 
	        //load mPDF library
	 
	       //generate the PDF from the given html
	         $this->m_pdf->pdf->WriteHTML($html);
	        //download it.
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
	 	}

	 	public function save_customer($id){
			 $data['trial_req'] = $this->form_model->get_byCondition('customers',array('id'=>$id))->row();
	  			//load the view and saved it into $html variable
	         $html=$this->load->view('pdf/customerPDF', $data, true);
	 
	        //this the the PDF filename that user will get to download
	        $pdfFilePath = "customer.pdf";
	 
	        //load mPDF library
	 
	       //generate the PDF from the given html
	         $this->m_pdf->pdf->WriteHTML($html);
	        //download it.
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
	 	}


	 	public function save_report($id){
			 $data['report'] = $this->form_model->get_byCondition('report',array('id'=>$id))->row();
	  			//load the view and saved it into $html variable
	         $html=$this->load->view('pdf/reportPDF', $data, true);
	 
	        //this the the PDF filename that user will get to download
	        $pdfFilePath = "report.pdf";
	 
	        //load mPDF library
	 
	       //generate the PDF from the given html
	         $this->m_pdf->pdf->WriteHTML($html);
	        //download it.
	        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
	 	}


	}

 ?>