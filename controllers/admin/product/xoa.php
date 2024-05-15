<?php
include '../../../core.php';
include '../../../models/admin/product.php';
include '../middleware/auth.php';

$product =isset($_GET['id']) ? (int) $_GET['id'] : false;

if (!$product) {
	die("bot foud");
}
$dt_product = new product();
$dt_product->delete_product($product);


header("Location: danhsach.php");
