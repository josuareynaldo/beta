<?php 

	/**
	* 
	*/
	class Test_model extends CI_Model
	{

		    //fungsi untuk menampilkan semua data dari tabel database
		var $tabel = 'users';   //variabel tabelnya

 

    function __construct() {

        parent::__construct();

    }

 

    //fungsi untuk menampilkan semua data dari tabel database

    function get_allkota() {

        $this->db->from($this->tabel);

        $query = $this->db->get();

 

        //cek apakah ada data

        if ($query->num_rows() > 0) { //jika ada maka jalankan

            return $query->result();

        }

    }

	}



 ?>