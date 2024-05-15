<?php
include '../../../core.php';
include '../../../models/admin/order.php';
include '../middleware/auth.php';

$id =isset($_GET['id']) ? (int) $_GET['id'] : false;

$order = new order();
$order->delete_bill($id);
$order->delete_bill_detail($id);

header("Location: danhsach.php");
