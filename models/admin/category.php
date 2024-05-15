<?php 
	class category extends DB
	{
		function __construct(){
			parent::__construct();
		}
		function get_all_category()
		{
			$sql = "SELECT * FROM categorys ";
			$results = $this->db_select($sql);
			return $results;
		}
		function get_category ($id) 
		{
			$sql = "SELECT * FROM categorys WHERE id='$id'";
			$result = $this->db_first_row($sql);
			return $result;
		}
		function update_category ($data, $user_id) {
			return $this->db_update('categorys', $data, "id = $user_id");
		}
		function create_category ($data) {
		return $this->db_insert('categorys', $data);
		
		}


		function delete_category ($user_id) {
			return $this->db_delete('categorys', "id = $user_id");
		}
	}