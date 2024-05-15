<?php
    include '../../core.php';
    $errors = array();


if (isset($_POST['btn_dnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = new DB();
    $sql = ("SELECT * FROM users where email = '$email' and passw = '$password'");
    $row = $login->db_first_row($sql);
    
    
    
    if (empty($row)) {
        $errors['name'] = "Tên tài khoản hoặc mật khẩu không chính xác.";
        $email = $_POST['email'];
    } else {

        // if ($_POST['luu'] == 1) {
        //     setcookie("remember_token", $row['remember_token'], time() + 3600, '/');
        // }   

        $_SESSION['user_id'] = $row['id'];
        header("location: " . BASE_URL . "views/admin/category/danhsach.php");
    }
}

// include '../../views/admin/login.php';
