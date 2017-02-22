<?php 

/**
* 
*/
class Product extends CI_Controller{
	
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

	public function lookup_Acc(){
				$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->products_model->lookup('acc','serial_number',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['serial_number']));
								$new_row['value0'] = htmlentities(stripcslashes($row['part_name']));
								$new_row['value']  = htmlentities(stripcslashes($row['description']));
								$new_row['value1'] = htmlentities(stripcslashes($row['type']));
								$new_row['value2'] = htmlentities(stripcslashes($row['service_date']));
								$new_row['value3'] = htmlentities(stripcslashes($row['date_install']));
								$new_row['value4'] = htmlentities(stripcslashes($row['image_name']));
								$new_row['value5'] = htmlentities(stripcslashes($row['article_number']));
								$new_row['value6'] = htmlentities(stripcslashes($row['quantity']));
								$row_set[] = $new_row;
							}
							echo json_encode($row_set);
					}
				}
	}

	public function lookup_Product(){
			$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->products_model->lookup('products','article_number',$q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label']  = htmlentities(stripcslashes($row['article_number']));
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
								'article_number' => $this->input->post('article_number'),
								'product_name' => $this->input->post('product_name'),
								'shipment_date' => $this->input->post('shipment_date'),
								'quantity' => $this->input->post('quantity'),
								'description' =>$this->input->post('description'),
								'status' => $status,
					);

					$this->products_model->insert_data('products',$data);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted '.$this->input->post('product_name').' into product database'
					);
					
					$this->history_model->insert_data('history',$report);
					redirect('user/index');
			}
	}

	public function register_acc($article_number){
		$data['article_number'] = $article_number;
		$this->load->view('register_part',$data);
	}

	public function add_acc(){
			
			if($this->input->post('register_part')){
				$config['upload_path']          = 'uploads/acc/'.$this->input->post('serial_number');
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
				$data1= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'part_name' => $this->input->post('part_name'),
						'quantity' => $this->input->post('quantity'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install'),
						'description' => $this->input->post('description'),
						'image_name' => $image_name

					);
					$this->acc_model->insert_data('acc',$data1);
					$report=array(
						'report'=> $this->session->userdata('name').' has inserted parts with serial_number '.$this->input->post('serial_number').' into part database'
					);
					
					$this->history_model->insert_data('history',$report);
					redirect('user/index');
			}

			else{
				redirect('user/index');
			}
	}


	public function edit_product($article_number){
			$data['products'] = $this->products_model->get_byCondition('products',array('article_number'=>$article_number))->row();
			$this->load->view('edit_product',$data);
	}

	public function update_product(){
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
						'quantity' => $this->input->post('quantity'),
						'shipment_date' => $this->input->post('shipment_date'),
						'description' => $this->input->post('description'),
						'status' => $status
					);
				 
				$this->products_model->update_data('products',$data,array('article_number'=>$this->input->post('article_number')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated '.$this->input->post('product_name').' on product database'
					);
					
				$this->history_model->insert_data('history',$report);
				redirect('user/index');

			}else{
				redirect('product/register_product');
			}
	}

	public function edit_acc($serial_number){
			$data['articles'] = $this->acc_model->get_byCondition('acc',array('serial_number'=>$serial_number))->row();
			$this->load->view('edit_parts',$data);
	}

	public function update_acc(){
			if($this->input->post('update')){
				$data= array(
						'serial_number' => $this->input->post('serial_number'),
						'article_number' => $this->input->post('article_number'),
						'part_name' => $this->input->post('part_name'),
						'description' => $this->input->post('description'),
						'type' => $this->input->post('type'),
						'quantity' => $this->input->post('quantity'),
						'service_date' => $this->input->post('service_date'),
						'date_install' => $this->input->post('date_install')
					);
				 
				$this->acc_model->update_data('acc',$data,array('serial_number'=>$this->input->post('serial_number')));
				$report=array(
						'report'=> $this->session->userdata('name').' has updated parts with serial number '.$this->input->post('serial_number').' on part database'
					);
					
					$this->history_model->insert_data('history',$report);
					redirect('user/index');

			}

			else{

				redirect('product/register_acc');
			}
	}

	function recursiveRemoveDirectory($directory){
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

	public function delete_product($article_number){
			$this->products_model->delete_data('products',array('article_number'=>$article_number));
			$this->acc_model->delete_data('acc',array('article_number'=>$article_number));
			$data['products']= $this->products_model->get_byCondition('products',array('article_number'=>$article_number));

			foreach ($products as $product) {
				recursiveRemoveDirectory(baseurl().$products->image_name);
			}
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with article number '.$article_number.' on product database'
					);
					
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
	}

	public function delete_acc($serial_number){
			$this->user_model->delete_data('acc',array('serial_number'=>$serial_number));
			$report=array(
						'report'=> $this->session->userdata('name').' has deleted product with serial number '.$article_number.' on part database'
					);		
			$this->history_model->insert_data('history',$report);
			redirect('user/index');
	}



		
}

 ?>