<?php

include '../../core.php';
include '../../models/layouts/index.php';
include 'middleware/order.php';


$index = new index();
$sp = $index->get_products_muanhieu();

$id_ban = $_GET['id_ban'];
if(!$id_ban){
	header("Location: ban.php");
}