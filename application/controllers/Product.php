<?php 

/**
* 
*/
class Product extends CI_Controller
{
	
	public function index(){
		$data['products'] = $this->user_model->get_data('products');
		$data['articles'] = $this->user_model->get_data('articles');

		$this->load->view('product',$data);
	}
	
	public function lookup()
			{
				$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->m_autocomplete->lookup($q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label'] = htmlentities(stripcslashes($row['serial_number']));
								$new_row['value'] = htmlentities(stripcslashes($row['product_name']));
								$new_row['value1'] = htmlentities(stripcslashes($row['shipment_date']));
								$row_set[] = $new_row;
							}
					echo json_encode($row_set);
					}
				}


			}
	public function register_product(){
			$this->load->view('register_product');
		}

	public function add_product(){
			
			if($this->input->post('register_product')){
				$config['upload_path']          = 'uploads/products/'.$this->input->post('serial_number');
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->upload->initialize($config);

                if (!file_exists($config['upload_path'])) {
    				mkdir($config['upload_path']);
				} 

                if ( $this->upload->do_upload('upload_image'))
                {
                        #$error = array('error' => $this->upload->display_errors());
                		$image = $this->upload->data();
                       $image_name = $config['upload_path'].'/'.$image['file_name'];
                }
                else
                {
                        
						

                        
                }

				
				
				$data1= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install'),
						

					);
					$this->user_model->insert_data('articles',$data1);
					$currDate=date("Y/m/d");
					$productDate=$this->input->post('shipment_date');
					$diff = abs(strtotime($currDate) - strtotime($productDate));
					$years = floor($diff / (365*60*60*24));
					if($years<2){
							$status="Warranty";
					}
					else{
							$status="Warranty Expired";
						}

					$data2=array(
								'serial_number' => $this->input->post('serial_number'),
								'product_name' => $this->input->post('product_name'),
								'shipment_date' => $this->input->post('shipment_date'),
								'status' => $status,
								'image_name' => $image_name
					);

					$this->user_model->insert_data('products',$data2);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted '.$this->input->post('product_name').' into product database'
					);
					
					$this->user_model->insert_data('history',$report);
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

			else{
			
				redirect('product/register_product');
			}
		}

		public function register_part($serial_number){
			$data['serial_number'] = $serial_number;
			$this->load->view('register_part',$data);
			
		}

		public function add_part(){
			
			if($this->input->post('update')){

				
				
				$data1= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install'),
						/*'image_name' => $file_name*/

					);
					$this->user_model->insert_data('articles',$data1);
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

			else{
			
				redirect('product/register_product');
			}
		}


		public function edit($serial_number){
			$data['products'] = $this->user_model->get_byCondition('products',array('serial_number'=>$serial_number))->row();
			$this->load->view('edit_product',$data);
		}

		public function update(){
			if($this->input->post('update')){
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
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'product_name' => $this->input->post('product_name'),
						'shipment_date' => $this->input->post('shipment_date'),
						'status' => $status
					);
				 
				$this->user_model->update_data('products',$data,array('serial_number'=>$this->input->post('serial_number')));
				
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

		public function editParts($article_number){
			$data['articles'] = $this->user_model->get_byCondition('articles',array('article_number'=>$article_number))->row();
			$this->load->view('edit_parts',$data);
		}

		public function updateParts(){
			if($this->input->post('update')){
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install')
					);
				 
				$this->user_model->update_data('articles',$data,array('article_number'=>$this->input->post('article_number')));
				
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


		function recursiveRemoveDirectory($directory)
		{
		    foreach(glob("{$directory}/*") as $file)
		    {
		        if(is_dir($file)) { 
		            recursiveRemoveDirectory($file);
		        } else {
		            unlink($file);
		        }
		    }
		    rmdir($directory);
		}

		public function delete($serial_number){
			$this->user_model->delete_data('products',array('serial_number'=>$serial_number));
			$this->user_model->delete_data('articles',array('serial_number'=>$serial_number));
			$data['products']= $this->user_model->get_byCondition('products',array('serial_number'=>$serial_number));

			foreach ($products as $product) {
				recursiveRemoveDirectory(baseurl().$products->image_name);
			}
			
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



		public function deleteParts($serial_number){
			$this->user_model->delete_data('articles',array('serial_number'=>$serial_number));
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