<?php
	/**
	* 
	*/
	class Form_tech extends CI_Controller
	{

		public function index(){
			$data['histories']= $this->get_history();
			$data['form_services'] = $this->get_services();
			$data['owner_forms'] = $this->get_exchanges();
			$data['form_exchanges'] = $this->get_owners();
			
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

		public function add_form_replacement(){
			if($this->input->post('save')){
				$query1 = $this->products_model->lookup('products','article_number',$this->input->post('article_number'));
				$query2 = $this->products_model->lookup('acc','serial_number',$this->input->post('serial_number'));
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
					$this->form_replacements_model->insert_data('form_replacements',$data);
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form replacement with Exchange Id '.$this->input->post('exchange_id')
						);
					$this->history_model->insert_data('history',$report);
					redirect('user/index');
				}
				else{
					redirect('form_tech/form_replacement');
				}
				
			}

			else{
				redirect('form_tech/form_replacement');
			}
		}

		public function add_form_service(){
			if($this->input->post('save')){
				$query2 = $this->products_model->lookup('acc','serial_number',$this->input->post('serial_number'));
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
					$this->form_services_model->insert_data('form_services',$data);
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form service with Service Date '.$this->input->post('date_service')
						);
					$this->history_model->insert_data('history',$report);
					redirect('user/index');
				}
				else{
					redirect('form_tech/form_service');
				}

			}else{
				redirect('form_tech/form_service');
			}
		}


		public function add_owner_form(){
			$query1 = $this->products_model->lookup('products','article_number',$this->input->post('article_number'));
			$query2 = $this->products_model->lookup('acc','serial_number',$this->input->post('serial_number'));
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
				$this->owner_form_model->insert_data('owner_forms',$data);
				$report=array(
						'report'=> $this->session->userdata('name').' has inserted a new owner form with serial number '.$this->input->post('serial_number')
					);
				$this->history_model->insert_data('history',$report);
				redirect('user/index');
			}
			else{
				redirect('form_tech/owner_form');
			}

			}else{
				redirect('form_tech/owner_form');
			}
		}


		public function add_form_exchange(){
			if($this->input->post('save')){
				$query1 = $this->products_model->lookup('products','article_number',$this->input->post('article_number'));
				$query2 = $this->products_model->lookup('acc','serial_number',$this->input->post('serial_number'));
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
					$this->form_exchanges_model->insert_data('form_exchanges',$data);
					$report=array(
							'report'=> $this->session->userdata('name').' has inserted a new form exchange with article number '.$this->input->post('article_number')
						);
					$this->history_model->insert_data('history',$report);
					redirect('user/index');
				}

				else{
					redirect('form_tech/form_exchange');
					}
				}
				
			else{
				redirect('form_tech/form_exchange');
			}
		}

		public function delete_replacement($id){
			$temp=$this->history_model->select_data('exchange_id','form_replacements',$id);
			$this->form_replacements_model->delete_data('form_replacements',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a replacement form with exchange ID '.$temp->exchange_id
					);
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
		}

		public function delete_service($id){
			$temp=$this->history_model->select_data('date_service','form_services',$id);
			$this->form_services_model->delete_data('form_services',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with install date '.$temp->date_service
					);
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
		}

		public function delete_owner($id){
			$temp=$this->history_model->select_data('serial_number','owner_forms',$id);
			$this->owner_form_model->delete_data('owner_forms',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with serial number '.$temp->serial_number
					);
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
		}

		public function delete_exchange($id){
			$temp=$this->history_model->select_data('article_number','form_exchanges',$id);
			$this->form_exchanges_model->delete_data('form_exchanges',array('id'=>$id));
			$report=array(
						'report'=> 'Stakeholder '.$this->session->userdata('name').' has deleted a service form with article number '.$temp->article_number
					);
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
		}


		public function save_replacement($id){
			$temp=$this->history_model->select_data('exchange_id','form_replacements',$id);
			$data['form_replacement'] = $this->form_replacements_model->get_byCondition('form_replacements',array('id'=>$id))->row();
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
			$this->history_model->insert_data('history',$report);
		}

		public function save_service($id){
			$temp=$this->history_model->select_data('date_service','form_services',$id);
			$data['form_service'] = $this->form_services_model->get_byCondition('form_services',array('id'=>$id))->row();
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
			$this->history_model->insert_data('history',$report);        
		}

		public function save_owner($id){
			$temp=$this->history_model->select_data('serial_number','owner_forms',$id);
			$data['owner_form'] = $this->owner_form_model->get_byCondition('owner_forms',array('id'=>$id))->row();
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
			$this->history_model->insert_data('history',$report);        
		}


		public function save_exchange($id){
			$temp=$this->history_model->select_data('article_number','form_exchanges',$id);
			$data['form_exchange'] = $this->form_exchanges_model->get_byCondition('form_exchanges',array('id'=>$id))->row();
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
			$this->history_model->insert_data('history',$report);        
		}
	}

 ?>