<?php

include '../../core.php';
include '../../models/layouts/index.php';
include 'middleware/order.php';
$id = $_GET['id'];
$id_ban = $_GET['id_ban'];
if (is_numeric($id)) {
	
	$dt_category = new index();
	$list_pr = $dt_category->get_list_product_by_category($id);

	if (!$list_pr) {
		header("Location:404.php");
	}
}else{
	header("Location:404.php");
}

if(!$id_ban){
	header("Location:ban.php");
}
