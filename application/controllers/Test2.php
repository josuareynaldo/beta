<?php 
	class Test2 extends CI_Controller{
		public function index(){
			$data['products'] = $this->user_model->get_data('products');
			$this->load->view('list_product',$data);
		}

		public function insert(){
			// $data = array(
			//     'article_number' => $this->input->post('article_number'),
			//     'qty'     =>  $this->input->post('qty'),
			//     'price'   => $this->input->post('price'),
			//     'name'    => $this->input->post('name')
			//     );
			//  
			//     // Insert the product to cart
			//     $this->cart->insert($data);
			//  
			//     redirect('test2/index');
		}	

		public function update(){

		}
	}

 ?>