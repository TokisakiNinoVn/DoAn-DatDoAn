<?php
    include '../../../core.php';
    include '../../../models/admin/category.php';
    include '../middleware/auth.php';
    $errors = array();

    $category = new category();

    if (isset($_POST['save'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
    

        if (empty($name)) {
            $errors['name'] = 'Dữ liệu không được để trống';
        }

        

        if (!$errors) {
            $data = array('name' => $name);
            $id = $category->create_category($data);
        
            header("Location: danhsach.php");
        }
    }
    $menu_active = "quanlithumuc";
    include '../../../views/admin/category/them.php';
