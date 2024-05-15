<?php 

class product extends DB
{
	function __construct(){
		parent::__construct();
	}
	function get_all_product($key=null, $from=-1 , $soluong =-1,$id_type =-1)
	{
		$sql = "SELECT * FROM products ";
		if ($key!=null) {
			$keym= str_replace( ' ', '%', $key);
			$sql.=" WHERE name LIKE '%$key%' ";
		}
		// if ($id_type!=null) {
			
		// 	$sql.=" AND id_type=$id_type ";
		// }
		$sql.=" order by id desc ";
		if ($from!=-1 &&$soluong!=-1) {
			$sql.=" LIMIT $from,$soluong";
		}
		$results = $this->db_select($sql);
		return $results;
		 //echo $sql;
	}

	function get_product ($id) 
	{
		$sql = "
			SELECT products.*,categorys.name as category_name,categorys.id as category_id FROM products,categorys WHERE products.id_category=categorys.id and products.id='$id'
		";
		$result = $this->db_first_row($sql);
		return $result;
	}
	function get_product_img ($id) 
	{
		$sql = "
			SELECT * FROM products_img where id_product='$id'
		";
		$results =$this->db_select($sql);
		return $results;
	}
	function update_product ($data, $user_id) {
	    return $this->db_update('products', $data, "id = $user_id");
	}
	function update_product_img ($data, $user_id) {

	    return $this->db_update('products_img', $data, "id_product=$user_id");
	}
	function create_product ($data) {
		//var_dump($data);
	    $product_id = $this->db_insert('products', $data);
	    return $this->get_product($product_id);
	}
	function create_product_img ($data) {
		//var_dump($data);
	    $product_id = $this->db_insert('products_img', $data);
	    return $this->get_product($product_id);
	}


	function delete_product ($user_id) {
	    return $this->db_delete('products', "id = $user_id");
	}
	function delete_product_img ($user_id) {
	    return $this->db_delete('products_img', "id_product= $user_id");
	}

	function get_all_type_product()
	{
		$sql = "SELECT * FROM type_products";
		$results = $this->db_select($sql);
		return $results;
	}
	function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

}