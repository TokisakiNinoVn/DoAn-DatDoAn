<?php

include '../../../core.php';
include '../../../models/admin/order.php';
include '../middleware/auth.php';


$menu_active = "quanlidonhang";
$order = new order();
$bills = $order->bills();

include '../../../views/admin/order/danhsach.php';