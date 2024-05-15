<?php

include '../../../core.php';
include '../middleware/auth.php';
include '../../../models/admin/type_product.php';

$errors = array();


$id_type =isset($_GET['id']) ? (int) $_GET['id'] : false;
$id_catgory = isset($_GET['id_type']) ? (int) $_GET['id_type'] : false;

$type_product = delete_type($id_type);

 header("Location: ../type_product/danhsach.php?id=$id_catgory");
 

