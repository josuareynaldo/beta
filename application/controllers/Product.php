<?php 

/**
* 
*/
class Product extends CI_Controller
{
	
	public function index(){
		$data['products'] = $this->user_model->get_data('products');
			

		$this->load->view('product',$data);
	}
	

	public function register_product(){
			$this->load->view('register_product');
		}

		public function add_product(){
			if($this->input->post('register_product')){
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type')

					);

				$this->user_model->insert_data('product',$data);
				redirect('user/index');

			}else{
				redirect('product/register_product');
			}
		}

		public function edit($id){
			$data['products'] = $this->user_model->get_byCondition('products',array('id'=>$id))->row();
			$this->load->view('edit_product',$data);
		}

		public function update(){
			if($this->input->post('update')){
				$data= array(
						 
						
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type')
					);
				 
				$this->user_model->update_data('product',$data,array('id'=>$this->input->post('id')));
				redirect('user/index');

			}else{
				redirect('product/register');
			}
		}

		public function delete($id){
			$this->user_model->delete_data('product',array('id'=>$id));
			redirect('user/index');

		}

}

 ?>