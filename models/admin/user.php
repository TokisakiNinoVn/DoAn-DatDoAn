<?php 
class user extends DB{
function get_all_user() 
{
	$sql = "SELECT * FROM users	";
	$result = $this->db_select($sql);
	return $result;
}
function get_user_by_id($id) 
{
	$sql = "SELECT * FROM users WHERE id='$id'";
	$result = $this->db_first_row($sql);
	return $result;
}
function check_user($email , $pass) 
{
	$sql = "SELECT * FROM `users` WHERE `email` ='$email' AND `passw`='$pass'";
	$result = $this->db_first_row($sql);
	return $result;
	//echo $sql;
}
function create_user($data) {
	return $this->db_insert('users',$data);
    
}
function update_user ($data, $user_id) {
	    return $this->db_update('users', $data, "id = $user_id");
}
	
function delete_user  ($user_id) {
	    return $this->db_delete('users', "id = $user_id");
}

}