<?php 

include '../../../core.php';

include '../middleware/auth.php';

$status = $_GET['status'];

$id = $_GET['id'];

$query = $db->query("UPDATE products SET status=$status where id=$id");

?>
