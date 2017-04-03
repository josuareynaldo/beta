<?php 

/**
* 
*/
class Product extends CI_Controller
{
	
	public function index(){
		$data['products'] = $this->get_products();
		$data['articles'] = $this->get_acc();
		$data['histories']= $this->get_history();


	}
	
	public function get_products(){
			return $this->products_model->get_data('products');
		}

	public function get_acc(){
			return $this->acc_model->get_data('acc');
		}

	public function get_history(){
			return $this->history_model->get_data('history');
		}

	public function register_product(){
			$this->load->view('register_product');
		}

	public function lookupParts(){
				$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->products_model->lookup('acc','article_number_acc',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['article_number_acc']));
								$new_row['value']  = htmlentities(stripcslashes($row['description']));
								$new_row['value1'] = htmlentities(stripcslashes($row['type']));
								$new_row['value2'] = htmlentities(stripcslashes($row['service_date']));
								$new_row['value3'] = htmlentities(stripcslashes($row['date_install']));
								$new_row['value4'] = htmlentities(stripcslashes($row['image_name']));
								$new_row['value5'] = htmlentities(stripcslashes($row['serial_number']));
								$row_set[] = $new_row;
							}
							echo json_encode($row_set);
					}
				}


	}

		public function lookupProduct()
		{
			$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->products_model->lookup('products','article_number_product',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['article_number_product']));
								$row_set[] = $new_row;
							}
							echo json_encode($row_set);
					}
				}

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
								'article_number_product' => $this->input->post('article_number_product'),
								'product_name' => $this->input->post('product_name'),
								'shipment_date' => $this->input->post('shipment_date'),
								'status' => $status,
					);

					$this->user_model->insert_data('products',$data);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted '.$this->input->post('product_name').' into product database'
					);
					
					$this->user_model->insert_data('history',$report);
					redirect('user/index');
								
			
			}
		}

		public function register_part($article_number){
			$data['article_number_product'] = $article_number;
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

				if(empty($this->input->post('serial_number'))){
                	$serial_number="N/A";
                }
                else{
                	$serial_number=$this->input->post('serial_number');
                }
				
				$data1= array(
						'article_number_acc' => $this->input->post('article_number_acc'),
						'article_number_product' => $this->input->post('article_number_product'),
						'serial_number' => $serial_number,
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install'),
						'description' => $this->input->post('description'),
						'image_name' => $image_name

					);
					$this->user_model->insert_data('acc',$data1);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted accessory with article number accessory '.$this->input->post('article_number_acc').' into accessory database'
					);
					
					$this->user_model->insert_data('history',$report);
					redirect('user/index');
			}

			else{
				redirect('user/index');
			}
		}


		public function edit($article_number){
			$data['products'] = $this->user_model->get_byCondition('products',array('article_number_product'=>$article_number))->row();
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
						'article_number_product' => $this->input->post('article_number_product'),
						'product_name' => $this->input->post('product_name'),
						'shipment_date' => $this->input->post('shipment_date'),
						'status' => $status
					);
				 
				$this->user_model->update_data('products',$data,array('article_number_product'=>$this->input->post('article_number_product')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated '.$this->input->post('product_name').' on product database'
					);
					
				$this->user_model->insert_data('history',$report);
				redirect('user/index');

			}else{
				redirect('product/register');
			}
		}

		public function editParts($serial_number){
			$data['articles'] = $this->user_model->get_byCondition('acc',array('article_number_acc'=>$serial_number))->row();
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
				 
				$this->user_model->update_data('acc',$data,array('article_number_acc'=>$this->input->post('article_number_acc')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated parts with serial number '.$this->input->post('serial_number').' on part database'
					);
					
					$this->user_model->insert_data('history',$report);

				redirect('user/index');

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
			$this->user_model->delete_data('products',array('article_number_product'=>$article_number));
			$this->user_model->delete_data('acc',array('article_number_product'=>$article_number));
			$data['products']= $this->user_model->get_byCondition('products',array('article_number_product'=>$article_number));

			foreach ($products as $product) {
				recursiveRemoveDirectory(baseurl().$products->image_name);
			}
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with article number product '.$article_number.' on product database'
					);
					
			$this->user_model->insert_data('history',$report);

			redirect('user/index');


		}



		public function deleteParts($serial_number){
			$this->user_model->delete_data('acc',array('article_number_acc'=>$serial_number));
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with serial number '.$serial_number.' on part database'
					);		
			$this->user_model->insert_data('history',$report);
			redirect('user/index');

		}



		
}

 ?>