<?php

class index extends DB {

	function get_all_products() {
		$sql = "SELECT * FROM products ";
		$results = $this->db_select($sql);
		return $results;
	}

	function get_all_menu_category()
	{
		// $sql = "SELECT category.*,type_products.name as name_type ,type_products.id as idtype FROM category,type_products where category.id=type_products.id_category ";
		$sql = "SELECT * FROM categorys ";
		$results = $this->db_select($sql);
		return $results;
	}

	function get_products($id) 
	{
		$sql = "SELECT * FROM products where id=$id ";
		$result = $this->db_first_row($sql);
		return $result;
	}
	function get_products_by_key($key) 
	{
		$sql = "SELECT * FROM products where name LIKE '%$key%' ";
		$result = $this->db_select($sql);
		return $result;
		
	}

	function get_name_type_by_type($id){
		$sql = "SELECT * FROM type_products where id='$id'";
		$results = $this->db_first_row($sql);
		return $results;
	}
	function get_list_product_by_category($id_category)
	{
		$sql = "SELECT * FROM products where id_category=$id_category ";
		$result = $this->db_select($sql);
		return $result;
	}
	function get_products_allthuoctinh($id) 
	{
		$sql = "SELECT products.*,type_products.name as type_products_name,category.name as category_name FROM products ,type_products , category WHERE products.id_type = type_products.id and type_products.id_category = category.id and products.id = '$id'";
		$result = $this->db_first_row($sql);
		return $result;
	}
	function get_img_products($id) 
	{
		$sql = "SELECT * FROM products_img where id_product=$id ";
		$result = $this->db_select($sql);
		return $result;
	}





	function get_user($id) 
	{
		$sql = "SELECT * FROM customers WHERE id='$id'";
		$result = $this->db_first_row($sql);
		return $result;
	}
	function check_user($email , $pass) 
	{
		$sql = "SELECT * FROM customers WHERE email='$email' and pass = '$pass'";
		$result = $this->db_first_row($sql);
		return $result;
	}
	function create_user($data) {
		return $this->db_insert('customers',$data);
		
	}
	function update_remember_token($data, $remember_token) {
		return $this->db_update('customers', $data, "remember_token = '$remember_token'");
	}
	function get_user_token($remember_token) 
	{
		$sql = "SELECT * FROM customers WHERE remember_token='$remember_token'";
		$result = $this->db_first_row($sql);
		return $result;
	}

	function get_products_muanhieu() 
	{
		$sql = "SELECT id_product,SUM(soluong) as soluong FROM `detail_bills` GROUP BY id_product ORDER BY soluong DESC  LIMIT 0,6";
		$result = $this->db_select($sql);
		return $result;
	}
	function get_order(){
		$sql = "SELECT order_mon_an.ban as ban,order_mon_an.id as id_order,products.img as img,products.name as name,order_mon_an.quantity as soluong FROM products,order_mon_an WHERE products.id=order_mon_an.id_product ORDER BY order_mon_an.id ASC";
		$result = $this->db_select($sql);
		return $result;
	}
	function xoadathang ($id) {
			return $this->db_delete('order_mon_an', "id = $id");
		}
	function xoadathangtronggiohang ($id) {
		return $this->db_delete('order_mon_an', "id_product = $id");
	}

	function get_table()
	{
		$sql = "SELECT * FROM ban_an ";
		$result = $this->db_select($sql);
		return $result;
	}



	function create_product_order($data)
	{
		
		return $this->db_insert('order_mon_an',$data);
		
	}

}