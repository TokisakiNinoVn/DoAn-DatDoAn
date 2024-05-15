<?php

// include '../../../core.php';
include '../../../models/admin/category.php';
include '../middleware/auth.php';

// $errors = array();


$id_category =isset($_POST['id']) ? (int) $_POST['id'] : false;
$name =isset($_POST['category']) ? $_POST['category'] : false;
$category = new category();
$category_byid = $category->get_category($id_category);
$data = array('name' => $name);
$category->update_category($data, $id_category);

