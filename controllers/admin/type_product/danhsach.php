<?php
	include '../../../core.php';
	include '../../../models/admin/type_product.php';
	include '../../../models/admin/category.php';
	include '../middleware/auth.php'; 

	$id_category =isset($_GET['id']) ? (int) $_GET['id'] : false;
	$cl_type = new type_products();
	$cl_cate = new category();
	$category = $cl_cate->get_category($id_category) ;
	if(!$category){
		header("Location:../404.php");
	}
	$type_product =  $cl_type->get_all_type($id_category);
	$menu_active = "quanlithumuc";
	include '../../../views/admin/type_product/danhsach.php';
