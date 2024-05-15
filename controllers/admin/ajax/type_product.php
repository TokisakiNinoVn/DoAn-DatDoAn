<?php 

include '../../../core.php';
include '../../../models/admin/type_product.php';
include '../middleware/auth.php';

$id = $_GET['id'];

$type =  get_all_type($id);

//$query = $db->query("UPDATE products SET status=$status where id=$id");
foreach($type as $type){

	
	echo "<option value='".$type['id']."''>".$type['name']."</option>";
}
?>
