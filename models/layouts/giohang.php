<?php
class giohang extends DB{
/**
 * Kiểm tra sản phẩm đã có trong giỏ hàng hay chưa
 * @param  int $id ID của sản phẩm cần kiểm tra
 * @return boolean
 */
function cart_exists($id_ban , $id) {
	// if (isset($_SESSION[SHOPPING_CART_SESSION][$id])) {
	// 	return true;
	// }

	// return false;

	return isset($_SESSION[SHOPPING_CART_SESSION][$id_ban][$id]);
}

/**
 * Lấy thông tin giỏ hàng trong sản phẩm
 * @param  int $id ID sản phẩm
 * @return array     thông tin sản phẩm trong giỏ hàng
 */
function cart_get($id_ban , $id) {
	return $_SESSION[SHOPPING_CART_SESSION][$id_ban][$id];
}

function add_to_cart($id_ban , $id, $product, $price, $qty ) {
	$_SESSION[SHOPPING_CART_SESSION][$id_ban][$id] = array(
		'product_info' => $product,
		'price' => $price,
		'quantity' => $qty,
	);

	

	return $_SESSION[SHOPPING_CART_SESSION][$id_ban][$id];
}

function create_bill($data) {
	return $this->db_insert('bills',$data);
}
function create_bills_detail($data) {
	return $this->db_insert('detail_bills',$data);
}

}
