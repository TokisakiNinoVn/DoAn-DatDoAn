<?php
 include '../../../core.php';
include '../../../models/admin/user.php';
include '../middleware/auth.php';
$errors = array();

$user = new user();

if (isset($_POST['save'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $level = isset($_POST['toprole']) ? $_POST['toprole'] : '';

    $errors = array(); // Khai báo mảng lỗi

    if (empty($name)) {
        $errors['name'] = 'Dữ liệu không được để trống';
    }

    if (!$errors) { // Nếu không có lỗi
        $data = array('name' => $name, "email" => $email, "passw" => md5($password), "toprole" => $level); // Sửa 'passw' thành 'password'
        $user->create_user($data);
        
        header("Location: danhsach.php");
        exit; // Thêm lệnh exit sau khi thực hiện chuyển hướng
    }
}

$menu_active = "quanlythanhvien";
include '../../../views/admin/user/them.php';
