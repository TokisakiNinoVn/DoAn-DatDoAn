<?php 
class type_products extends DB{
function get_all_type($id)
{
	$sql = "SELECT * FROM type_products WHERE id_category='$id'";
	$results = $this->db_select($sql);
	return $results;
}
function get_type ($id) 
{
	$sql = "SELECT * FROM type_products WHERE id='$id'";
	$result = $this->db_first_row($sql);
	return $result;
}
function update_type ($data, $user_id) {
    return $this->db_update('type_products', $data, "id = $user_id");
}
function create_type ($data) {
    return $this->db_insert('type_products', $data);
}


function delete_type ($user_id) {
    return $this->db_delete('type_products', "id = $user_id");
}
}