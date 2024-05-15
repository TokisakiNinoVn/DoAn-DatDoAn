<?php
 //include '../../../core.php';
include '../../../models/admin/category.php';
include '../middleware/auth.php';

$id_category =isset($_GET['id']) ? (int) $_GET['id'] : false;

if (!$id_category) {
	die("bot foud");
}
$category = new category();
$category->delete_category($id_category);

header("Location: danhsach.php");
