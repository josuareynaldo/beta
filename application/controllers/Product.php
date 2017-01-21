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
	
	public function register_product(){
			$this->load->view('register_product');
		}

	public function add_product(){
			
			if($this->input->post('register_product')){
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

					$data=array(
								'article_number' => $this->input->post('article_number'),
								'product_name' => $this->input->post('product_name'),
								'shipment_date' => $this->input->post('shipment_date'),
								'description' =>$this->input->post('description'),
								'status' => $status,
					);

					$this->user_model->insert_data('products',$data);
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
		}

		public function register_part($article_number){
			$data['article_number'] = $article_number;
			$this->load->view('register_part',$data);
			
		}

		public function add_part(){
			
			if($this->input->post('register_part')){
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
                		$resize['image_library'] = 'gd2';
				        $resize['source_image'] = $image['full_path'];
				        $resize['maintain_ratio'] = TRUE;
				        $resize['width']     = 200;
				        $resize['height']   = 200;
				        $resize['overwrite']=true;
				        $this->load->library('image_lib', $resize);
				        $this->image_lib->resize();
                       $image_name = $config['upload_path'].'/'.$image['file_name'];
                }
                else
                {
                        
						

                        
                }

				
				
				$data1= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'part_name' => $this->input->post('part_name'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install'),
						'description' => $this->input->post('description'),
						'image_name' => $image_name

					);
					$this->user_model->insert_data('articles',$data1);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted parts with serial_number '.$this->input->post('serial_number').' into part database'
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


		public function edit($article_number){
			$data['products'] = $this->user_model->get_byCondition('products',array('article_number'=>$article_number))->row();
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
						'article_number' => $this->input->post('article_number'),
						'product_name' => $this->input->post('product_name'),
						'shipment_date' => $this->input->post('shipment_date'),
						'description' => $this->input->post('description'),
						'status' => $status
					);
				 
				$this->user_model->update_data('products',$data,array('article_number'=>$this->input->post('article_number')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated '.$this->input->post('product_name').' on product database'
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

			}else{
				redirect('product/register');
			}
		}

		public function editParts($serial_number){
			$data['articles'] = $this->user_model->get_byCondition('articles',array('serial_number'=>$serial_number))->row();
			$this->load->view('edit_parts',$data);
		}

		public function updateParts(){
			if($this->input->post('update')){
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'part_name' => $this->input->post('part_name'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install')
					);
				 
				$this->user_model->update_data('articles',$data,array('serial_number'=>$this->input->post('serial_number')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated parts with serial number '.$this->input->post('serial_number').' on part database'
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

		public function delete($article_number){
			$this->user_model->delete_data('products',array('article_number'=>$serial_number));
			$this->user_model->delete_data('articles',array('article_number'=>$serial_number));
			$data['products']= $this->user_model->get_byCondition('products',array('article_number'=>$article_number));

			foreach ($products as $product) {
				recursiveRemoveDirectory(baseurl().$products->image_name);
			}
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with article number '.$article_number.' on product database'
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



		public function deleteParts($serial_number){
			$this->user_model->delete_data('articles',array('serial_number'=>$serial_number));
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with serial number '.$article_number.' on part database'
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



		
}

 ?>