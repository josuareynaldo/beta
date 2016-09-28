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
				$data1= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type')

					);
					$currDate=date("Y/m/d");
					$productDate=$this->input->post('shipment_date');
					$diff = abs(strtotime($currDate) - strtotime($productDate));
					$years = floor($diff / (365*60*60*24));
					if($years<2){
						$status="Warraty";
					}
					else{
						$status="Warranty Expired";
					}

				$data2=array(
						'serial_number' => $this->input->post('serial_number'),
						'product_name' => $this->input->post('product_name'),
						'status' => $status
					);

				$this->user_model->insert_data('articles',$data1);
				$this->user_model->insert_data('products',$data2);
				if($this->session->userdata('position')=="Manager"){
					redirect('manager/index');
				}
				elseif($this->session->userdata('position')=="Stakeholder"){
					redirect('stakeholder/index');
				}
				else{
					redirect('user/index');
				}
				

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
				 
				$this->user_model->update_data('products',$data,array('id'=>$this->input->post('id')));
				
				if($this->session->userdata('position')=="Manager"){
					redirect('manager/index');
				}
				elseif($this->session->userdata('position')=="Stakeholder"){
					redirect('stakeholder/index');
				}
				else{
					redirect('user/index');
				}

			}else{
				redirect('product/register');
			}
		}

		public function delete($id){
			$this->user_model->delete_data('products',array('id'=>$id));
			if($this->session->userdata('position')=="Manager"){
					redirect('manager/index');
				}
				elseif($this->session->userdata('position')=="Stakeholder"){
					redirect('stakeholder/index');
				}
				else{
					redirect('user/index');
				}


		}

}

 ?>