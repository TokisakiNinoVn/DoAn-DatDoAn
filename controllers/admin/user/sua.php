<?php

 include '../../../core.php';
include '../../../models/admin/user.php';
include '../middleware/auth.php';

// $errors = array();


$id_user =isset($_GET['id']) ? (int) $_GET['id'] : false;
$user = new user();
$user_by_id  = $user->get_user_by_id($id_user);

if(isset($_POST['save'])){
    $email = isset($_POST['email']) ? $_POST['email'] : ''; // Khởi tạo giá trị mặc định cho $email
    $name = isset($_POST['name']) ? $_POST['name'] : ''; // Khởi tạo giá trị mặc định cho $name
    $level = isset($_POST['toprole']) ? $_POST['toprole'] : ''; // Sửa từ 'level' thành 'toprole'

    // Kiểm tra nếu $email, $name và $level không rỗng thì mới tiến hành cập nhật
    if(!empty($email) && !empty($name) && !empty($level)) {
        $data = array("name"=>$name, "email"=>$email, "toprole"=>$level); // Sửa từ 'email' thành 'email' và 'toprole' thành $level

        $user->update_user($data, $id_user);
        header("location: danhsach.php");
        exit; // Thêm lệnh exit sau khi thực hiện chuyển hướng
    }
}


$menu_active = "quanlythanhvien";
include '../../../views/admin/user/sua.php';

