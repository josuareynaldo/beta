<?php
	/**
	* 
	*/
	class Salesmanager extends CI_Controller
	{

		public function index(){
			 $data['users'] = $this->user_model->get_data('users');
			 $data['trial_reqs'] = $this->user_model->get_data('trial_reqs');
			 $data['trial_results'] = $this->user_model->get_data('trial_results');
			 $data['histories']= $this->user_model->get_data('history');
			 // $data['form_replacements'] = $this->form_model->get_data('form_replacements');
			 // $data['form_services'] = $this->form_model->get_data('form_services');
			 // $data['owner_forms'] = $this->form_model->get_data('owner_forms');
			 // $data['form_exchanges'] = $this->form_model->get_data('form_exchanges');
				$this->load->view('salesmanager',$data);
		}	
		
		public function edit($id){
			$data['user'] = $this->user_model->get_byCondition('users',array('id'=>$id))->row();
			$this->load->view('edit_user',$data);
		}

		public function see_more($id){
			$data['trial_req'] = $this->form_model->get_byCondition('trial_reqs',array('id'=>$id))->row();

		}

		// public function button_see($id){
		// 	$data['owner_form'] = $this->form_model->get_byCondition('owner_forms',array('id'=>$id))->row();

		// }

		// public function btn_see($id){
		// 	$data['form_exchange'] = $this->form_model->get_byCondition('form_exchanges',array('id'=>$id))->row();

		// }

		public function update(){
			if($this->input->post('update')){
				$data= array(
						 
						'password' => sha1($this->input->post('password')),
						'address' => $this->input->post('address')

					);
				 
				$this->user_model->update_data('users',$data,array('id'=>$this->input->post('id')));
				redirect('salesmanager/index');

			}else{
				redirect('salesmanager/edit');
			}
		}

		 public function trial_req(){
		 	$this->load->view('forms/trial_reqs');
		 }

		public function trial_result(){
		 	$this->load->view('forms/trial_results');
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
				redirect('salesmanager/index');

			}else{
				redirect('salesmanager/trial_req');
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
				redirect('salesmanager/index');

			}else{
				redirect('salesmanager/trial_result');
			}
		}



		public function delete_trial_req($id){
			$this->form_model->delete_data('trial_reqs',array('id'=>$id));
			redirect('salesmanager/index');
		 }

		public function delete_trial_result($id){
			$this->form_model->delete_data('trial_results',array('id'=>$id));
			redirect('salesmanager/index');
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

	}

 ?>