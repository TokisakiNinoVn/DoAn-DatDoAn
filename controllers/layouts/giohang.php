<?php

include '../../core.php';
include '../../models/layouts/index.php';
include '../../models/layouts/giohang.php';
include 'middleware/order.php';

$id_ban = $_GET['id_ban'];
if(!$id_ban){
	header("Location:ban.php");
}