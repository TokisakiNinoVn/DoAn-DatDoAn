<?php 

include '../../../core.php';
include '../../../models/layouts/index.php';
include '../../../models/layouts/giohang.php';

$id = $_GET['id'];



$index =new index();
$index->xoadathang($id);

header("Location: " . BASE_URL . "views/layouts/order.php");
