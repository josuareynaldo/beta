<?php

class M_autocomplete extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function lookup($table,$column,$keyword)
	{
		$this->db->select('*');
		$this->db->like($column, $keyword);
		$query = $this->db->get($table);

		return $query->result_array();
		/*
		if ($query->num_rows() > 0) {
				foreach ($query->result_array() as $row) {
					$new_row['value'] = htmlentities(stripcslashes($row['aka']));
					$new_row['label'] = htmlentities(stripcslashes($row['bird']));
					$row_set[] = $new_row;
				}
			echo json_encode($row_set);
		}*/
	}

}