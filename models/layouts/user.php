<?php 
class user extends DB {

function get_user($id) 
{
	$sql = "SELECT * FROM users WHERE id='$id'";
	$result = $this->db_first_row($sql);
	return $result;
}
function check_user($email , $pass) 
{
	$sql = "SELECT * FROM users WHERE email='$email' and passw = '$pass'";
	$result = $this->db_first_row($sql);
	return $result;
	//echo $sql;
}
function create_user($data) {
	return $this->db_insert('users',$data);
	
}


}