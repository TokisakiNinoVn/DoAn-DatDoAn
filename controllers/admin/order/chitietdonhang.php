<?php

include '../../../core.php';
include '../../../models/admin/order.php';
include '../middleware/auth.php';


$menu_active = "quanlidonhang";
$id =isset($_GET['id']) ? (int) $_GET['id'] : false;
$order = new order();
$bill_detail = $order->detail_bills($id);

include '../../../views/admin/order/chitietdonhang.php';