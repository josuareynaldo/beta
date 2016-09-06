<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{

		public function index(){
			 $data['users'] = $this->user_model->get_data('users');
			 $data['form_replacements'] = $this->form_replacement_model->get_data('form_replacements');
			$this->load->view('user',$data);
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
				redirect('user/index');

			}else{
				redirect('user/edit');
			}
		}

		public function form_replacement(){
			$this->load->view('forms/form_replacements');
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
				$this->form_replacement_model->insert_data('form_replacements',$data);
				redirect('user/index');

			}else{
				redirect('user/form_replacement');
			}
		}

		public function delete($id){
			$this->form_replacement_model->delete_data('form_replacements',array('id'=>$id));
			redirect('user/index');

		}

		public function save(){
				 $data = [];
        //load the view and saved it into $html variable
        $html=$this->load->view('welcome_message', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
		}

	}

 ?>