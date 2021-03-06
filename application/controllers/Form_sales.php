<?php
	/**
	* 
	*/
	class Form_sales extends CI_Controller
	{

		public function index(){
			 $data['histories']= $this->get_history();
			 $data['customers'] = $this->get_customers();
			 $data['trial_reqs'] = $this->get_trial_reqs();
			 $data['trial_results'] = $this->get_trial_results();
			 $data['reports'] = $this->get_reports();
		}

		public function get_customers(){
			return $this->customer_model->get_data('customers');
		}

		public function get_history(){
			return $this->history_model->get_data('history');
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
			

		 public function customer(){
		 	$this->load->view('forms/customers');
		 }

		 public function report(){
		 	$this->load->view('forms/reports');
		 }

		 public function trial_req(){
		 	$this->load->view('forms/trial_reqs');
		 }

		public function trial_result(){
		 	$this->load->view('forms/trial_results');
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
				$this->customer_model->insert_data('customers',$data);
				redirect('user/index');

			}else{
				redirect('form_sales/customer');
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
				$this->reports_model->insert_data('reports',$data);
				redirect('user/index');

			}else{
				redirect('form_sales/report');
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
						'tech_note' => $this->input->post('tech_note'),
						'status' => $this->input->post('stat')


					);
				$this->trial_reqs_model->insert_data('trial_reqs',$data);
				redirect('user/index');

			}else{
				redirect('form_sales/trial_req');
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
						'status' => $this->input->post('stats')


					);
				$this->trial_results_model->insert_data('trial_results',$data);
				redirect('user/index');

			}else{
				redirect('form_sales/trial_result');
			}
		}

		public function delete_customer($id){
			$this->customer_model->delete_data('customers',array('id'=>$id));
			redirect('user/index');
		 }

		public function delete_report($id){
			$this->reports_model->delete_data('reports',array('id'=>$id));
			redirect('user/index');
		 }

		public function delete_trial_req($id){
			$this->trial_reqs_model->delete_data('trial_reqs',array('trial_no'=>$trial_no));
			redirect('user/index');
		 }

		public function delete_trial_result($id){
			$this->trial_results_model->delete_data('trial_results',array('id'=>$id));
			redirect('user/index');
		 }

		public function save_report($id){
			 $data['report'] = $this->reports_model->get_byCondition('reports',array('id'=>$id))->row();
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

		public function save_customer($id){
			 $data['trial_req'] = $this->customer_model->get_byCondition('customers',array('id'=>$id))->row();
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
		

		public function save_trial_req($id){
			 $data['trial_req'] = $this->trial_reqs_model->get_byCondition('trial_reqs',array('trial_no'=>$trial_no))->row();
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
			 $data['trial_result'] = $this->trial_results_model->get_byCondition('trial_results',array('id'=>$id))->row();
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