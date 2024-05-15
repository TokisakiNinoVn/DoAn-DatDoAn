<?php
include '../../../core.php';
include '../../../models/admin/type_product.php';
include '../middleware/auth.php';
$errors = array();

$id_category =isset($_GET['id']) ? (int) $_GET['id'] : false;

echo $id_category;
if (isset($_POST['save'])) {
    $type_product['name'] = isset($_POST['name']) ? $_POST['name'] : '';
   
   	

    if (empty($type_product['name'])) {
        $errors['name'] = 'Dữ liệu không được để trống';
    }

  

    if (!$errors) {
        $data = array('name' => $type_product['name'],'id_category'=>$id_category);
        create_type ($data);
        header("Location: ../type_product/danhsach.php?id=$id_category");
    }
}
$menu_active = "quanlithumuc";
include '../../../views/admin/type_product/them.php';