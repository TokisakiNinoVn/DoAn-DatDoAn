<?php 

include '../../../core.php';

include '../middleware/auth.php';
include '../../../models/admin/category.php';
$data = $_GET['data'];
parse_str($data,$str);
$data = $str['item'];


foreach($data as $key => $value){

	$sort = array('sort' => $key);

    update_category($sort, $value);
	
}
