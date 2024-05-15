
<?php 
include '../../../core.php';
include '../../../models/layouts/index.php';
include '../../../models/layouts/giohang.php';

$id = $_GET['id'];
$id_ban = $_GET['id_ban'];

if(isset($_SESSION[SHOPPING_CART_SESSION][$id_ban][$id])){
    unset($_SESSION[SHOPPING_CART_SESSION][$id_ban][$id]);
}
$index =new index();
$index->xoadathangtronggiohang($id);


header('location: ' . BASE_URL . 'views/layouts/giohang.php?id_ban=' . $id_ban);
