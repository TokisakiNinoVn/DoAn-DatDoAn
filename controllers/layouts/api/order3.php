<?php 

include '../../../core.php';
include '../../../models/layouts/index.php';
include '../../../models/layouts/giohang.php';

$index = new index();
$sp =$index->get_order();
$check = count($sp);
//$_SESSION['abc'] = $check;
echo $check;






