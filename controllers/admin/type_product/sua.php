<?php

include '../../../core.php';
include '../middleware/auth.php';
include '../../../models/admin/type_product.php';

$errors = array();


$id_type =isset($_GET['id']) ? (int) $_GET['id'] : false;
$id_catrgory =isset($_GET['id_type']) ? (int) $_GET['id_type'] : false;

$type_product = get_type($id_type);

if (!$type_product) {
    die('Not found');
}


if (isset($_POST['save'])) {
    $user['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $user['full_name'] = isset($_POST['full_name']) ? $_POST['full_name'] : '';

    if (empty($user['name'])) {
        $errors['name'] = 'Dũ liệu không được để trống';
    }

  

    if (!$errors) {
        $data = array('name' => $user['name']);
        update_type($data, $id_type);
        header("Location: ../type_product/danhsach.php?id=$id_catrgory");
    }
}
$menu_active = "quanlithumuc";
include '../../../views/admin/type_product/sua.php';