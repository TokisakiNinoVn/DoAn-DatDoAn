
<?php

include '../../../core.php';
include '../../../models/admin/product.php';
include '../../../models/admin/category.php';
include '../../../models/admin/type_product.php';
include '../middleware/auth.php';
$id = $_GET['id'];
$dt_product = new product();
$dt_category = new category();
$product = $dt_product->get_product($id);

$category = $dt_category->get_all_category();



 if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$id_category = $_POST['category'];
	$unit_price = $_POST['unit_price'];
	
 	$filechinh = $_FILES['filechinh']['name'];
	
 	if ($filechinh!='') {
 		$filechinh1 = $dt_product->generateRandomString(3)."_".$_FILES['filechinh']['name'];
		$duongdantamchinh = $_FILES['filechinh']['tmp_name'];
		$pathchinh = '../../../upload/products/';
		move_uploaded_file($duongdantamchinh, $pathchinh.$filechinh1);	
 	}else{

 		$filechinh1 = $product['img'];
		// $duongdantamchinh = $_FILES['filechinh']['tmp_name'];
		// $pathchinh = '../../../upload/products/';
		// move_uploaded_file($duongdantamchinh, $pathchinh.$filechinh1);	
 	}

	$data = array(	
		'name'=>$name,
		'img'=>$filechinh1,
	
		'id_category'=>$id_category,
		'unit_price'=>$unit_price,	
	);

 	$product = $dt_product->update_product($data,$id);
	


	//  $namefile = $_FILES['file']['name'];
	// $duongdantam = $_FILES['file']['tmp_name'];
	//  $path = '../../../upload/products/';

	// if ($namefile[0]!='') {
	// 	foreach($img as $img){
	// 		delete_product_img($id);
	// 	}
	// 	foreach ($duongdantam as $i => $value) {
	// 		$namefile = generateRandomString(3)."_".$_FILES['file']['name'][$i];
	// 		move_uploaded_file($duongdantam[$i], $path.$namefile);	
	// 		$data = array('path'=>$namefile,'id_product'=>$id);
	// 		create_product_img($data);
	// 	}
		
	// }

	

 	header("Location: danhsach.php");
 }
$menu_active = "quanlisanpham";
include '../../../views/admin/product/sua.php';

