
<?php

include '../../../core.php';
include '../../../models/admin/product.php';
include '../../../models/admin/category.php';
include '../middleware/auth.php';
$dt_category = new category();
 $category = $dt_category->get_all_category();
$dt_product= new product();


if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$id_category = $_POST['category'];
	
	$unit_price = $_POST['unit_price'];
	
	
	

	$filechinh = $dt_product->generateRandomString(3)."_".$_FILES['filechinh']['name'];
	$duongdantamchinh = $_FILES['filechinh']['tmp_name'];
	$pathchinh = '../../../upload/products/';
	move_uploaded_file($duongdantamchinh, $pathchinh.$filechinh);	
	$data = array(	
		'name'=>$name,
		'img'=>$filechinh,
		
		'id_category'=>$id_category,
		'unit_price'=>$unit_price,
		
			
	);


	
	$product = $dt_product->create_product($data);
	// $id = $product['id'];
	
	//  $duongdantam = $_FILES['file']['tmp_name'];
	//  $path = '../../../upload/products/';
	 
	// if ($duongdantam[0]!=null) {		
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
include '../../../views/admin/product/them.php';

