<?php 

		/**
		* 
		*/
		class Test extends CI_Controller
		{
			


			public function index(){
				
				$this->load->view('test2');
			}

			// public function get_allkota() {

		 //      $kode = $this->input->post('kode',TRUE); //variabel kunci yang di bawa dari input text id kode

		 //        $query = $this->test_model->get_allkota(); //query model

		 //        $kota       =  array();

		 //        foreach ($query as $d) {

		 //            $kota[]     = array(

		 //                'label' => $d->name, //variabel array yg dibawa ke label ketikan kunci

		 //                'name' => $d->name , //variabel yg dibawa ke id nama

		 //                'address' => $d->address, //variabel yang dibawa ke id ibukota

		 //                'position' => $d->position //variabel yang dibawa ke id keterangan

		 //            );

		 //        }

		 //        echo json_encode($kota);
		 //    }

		


			function lookup()
			{
				$term = $this->input->get('term');
				if (isset($term)) {
					$q = strtolower($term);
					$query = $this->m_autocomplete->lookup($q);

					if (count($query) > 0) {
							foreach ($query as $row) {
								$new_row['label'] = htmlentities(stripcslashes($row['name']));
								$new_row['value'] = htmlentities(stripcslashes($row['position']));
								$row_set[] = $new_row;
							}
					echo json_encode($row_set);
					}
				}


			}


		}

 ?>