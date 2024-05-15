<?php

 include '../../../core.php';
include '../../../models/admin/user.php';
include '../middleware/auth.php';
$user = new user(); 
$all_user = $user->get_all_user();

$menu_active = "quanlythanhvien";

include '../../../views/admin/user/danhsach.php';