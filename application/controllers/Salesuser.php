<?php
	/**
	* 
	*/
	class Salesuser extends CI_Controller
	{

		public function index(){
			 $data['users'] = $this->user_model->get_data('users');
			 $data['trial_reqs'] = $this->user_model->get_data('trial_reqs');
			 $data['histories']= $this->user_model->get_data('history');
			 // $data['form_replacements'] = $this->form_model->get_data('form_replacements');
			 // $data['form_services'] = $this->form_model->get_data('form_services');
			 // $data['owner_forms'] = $this->form_model->get_data('owner_forms');
			 // $data['form_exchanges'] = $this->form_model->get_data('form_exchanges');
				$this->load->view('salesuser',$data);
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
				redirect('salesuser/index');

			}else{
				redirect('salesuser/edit');
			}
		}

		 public function trial_req(){
		 	$this->load->view('forms/trial_reqs');
		 }

		// public function form_service(){
		// 	$this->load->view('forms/form_services');
		// }



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
				redirect('salesuser/index');

			}else{
				redirect('salesuser/trial_req');
			}
		}

		// public function add_form_service(){
		// 	if($this->input->post('save')){
		// 		$data= array(
		// 				'date_service' => $this->input->post('date_service'),
		// 				'serial_number' => $this->input->post('serial_number'),
		// 				'printer' => $this->input->post('printer'),
		// 				'date_install' => $this->input->post('date_install'),
		// 				'status' => $this->input->post('status'),
		// 				'ink_number' => $this->input->post('ink_number'),
		// 				'solvent_number' => $this->input->post('solvent_number'),
		// 				'technician' => $this->input->post('technician'),
		// 				'visco_act' => $this->input->post('visco_act'),
		// 				'pres_act' => $this->input->post('pres_act'),
		// 				'mb_value' => $this->input->post('mb_value'),
		// 				'tmp' => $this->input->post('tmp'),
		// 				'bo_cur' => $this->input->post('bo_cur'),
		// 				'bo_ref' => $this->input->post('bo_ref'),
		// 				'date_ls' => $this->input->post('date_ls'),
		// 				'hour_ls' => $this->input->post('hour_ls'),
		// 				'total_hour' => $this->input->post('total_hour'),
		// 				'problem' => $this->input->post('problem'),
		// 				'replace_part' => $this->input->post('replace_part'),
		// 				'service_work' => $this->input->post('service_work')

		// 			);
		// 		$this->form_model->insert_data('form_services',$data);
		// 		redirect('user/index');

		// 	}else{
		// 		redirect('user/form_service');
		// 	}
		// }



		public function delete_trial_req($id){
			$this->form_model->delete_data('trial_reqs',array('id'=>$id));
			redirect('salesuser/index');
		 }

		// public function delete_service($id){
		// 	$this->form_model->delete_data('form_services',array('id'=>$id));
		// 	redirect('user/index');
		// }

		

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

		// public function save_service($id){
		// $data['form_service'] = $this->form_model->get_byCondition('form_services',array('id'=>$id))->row();
  //       //load the view and saved it into $html variable
  //       $html=$this->load->view('pdf/form_servicePDF', $data, true);
 
  //       //this the the PDF filename that user will get to download
  //       $pdfFilePath = "form_service.pdf";
 
  //       //load mPDF library
 
  //      //generate the PDF from the given html
  //       $this->m_pdf->pdf->WriteHTML($html);
 
  //       //download it.
  //       $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		// }

	}

 ?>