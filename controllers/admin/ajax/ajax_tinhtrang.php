<?php 

include '../../../core.php';

include '../middleware/auth.php';

$tinhtrang = $_GET['tinhtrang'];

$id = $_GET['id'];

$query = $db->query("UPDATE products SET tinhtrang=$tinhtrang where id=$id");

?>
