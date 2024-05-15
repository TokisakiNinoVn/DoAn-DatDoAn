<?php 

include '../../../core.php';
include '../../../models/layouts/index.php';
include '../../../models/layouts/giohang.php';

$id_ban = $_POST['id_ban'];

  $data = array('date_order'=>date("D-d-m-Y"),'total'=>$_SESSION['total'][$id_ban]);

  $giohang = new giohang();
  $id_bill =  $giohang->create_bill($data);

foreach($_SESSION[SHOPPING_CART_SESSION][$id_ban] as $pr){

  $data2 = array('id_bill'=> $id_bill,'id_product'=>$pr['product_info']['id'],'soluong'=>$pr['quantity']);
  $giohang->create_bills_detail($data2);
}
unset($_SESSION[SHOPPING_CART_SESSION][$id_ban]);
unset($_SESSION['total'][$id_ban]);







