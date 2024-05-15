<?php 
	include "../../../core.php";
	include "../../../models/layouts/giohang.php";
	include "../../../models/layouts/index.php";

	$id = (int)$_POST["id"];
	$id_ban = (int)$_POST["id_ban"];


	
	$dt_index = new index();
	$giohang = new giohang();
	$product = $dt_index->get_products($id);
	if(!$product){
		header('location:404.php');
	}else{

		$data= array('id_product'=>$id,'quantity'=>$_POST['quantity'],'ban'=>$id_ban);
		$dt_index->create_product_order($data);

		$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
		$quantity = $quantity <= 0 ? 1 : $quantity;

		
		if ($giohang->cart_exists($id_ban ,$id)) {
			$cart = $giohang->cart_get($id_ban,$id);
			$quantity = $cart['quantity'] + $quantity;
		}
		
		$price = $product['unit_price'] * $quantity;
		

		$giohang->add_to_cart($id_ban,$id, $product, $price, $quantity);
		


	}

	$total = 0;
	foreach ($_SESSION[SHOPPING_CART_SESSION][$id_ban] as $product) {
		
		$total=$total+$product['price']; 
	}
	$_SESSION['total'][$id_ban] = $total;
	echo $_SESSION['total'][$id_ban] ;
	
	
	// header('location:../giohang.php');


// iphone 2, id 1
// GET: add.php?id=1&quantity=2