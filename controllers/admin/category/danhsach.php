<?php
    include '../../../core.php';
    include '../../../models/admin/category.php';
    include '../../../models/layouts/index.php';
    include '../middleware/auth.php';

$category = new category(); 
$category = $category->get_all_category();
$menu_active = "quanlithumuc";

include '../../../views/admin/category/danhsach.php';