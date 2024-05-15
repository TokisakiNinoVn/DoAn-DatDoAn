
<?php

 include '../../../core.php';
include '../../../models/admin/product.php';
include '../middleware/auth.php';
//$key = isset($_GET['key']) ? $_GET['key'] : '';

// $slpr =  get_all_product();
// $tongtin=count($slpr);
// $tongsotrang=ceil($tongtin/3);



$menu_active = "quanlisanpham";
include '../../../views/admin/product/danhsach.php';