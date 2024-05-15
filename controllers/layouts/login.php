<?php
    include '../../core.php';
    include '../../models/layouts/user.php';
    $errors = array();
    
    
    if (isset($_POST['btn_dnhap'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $login = new user();
        
        $row = $login->check_user($email,$password);
        
        if (empty($row)) {
            $errors['name'] = "Tên tài khoản hoặc mật khẩu không chính xác.";
        } else {
            if($row['toprole']==1){   		
                $_SESSION['user_id'] = $row['id'];
                header("location: " . BASE_URL . "controllers/admin/category/danhsach.php");
            }
            
            if($row['toprole']==2){
                $_SESSION['user_order'] = $row['id'];
                header("location: " . BASE_URL . "views/layouts/ban.php");
            }
            
            if($row['toprole']==3){
                $_SESSION['user_nhabep'] = $row['id'];
                header("location: " . BASE_URL . "views/layouts/order.php");
            }

            if($row['toprole']==4){
                $_SESSION['user_khach'] = $row['id'];
                header("location: " . BASE_URL . "views/layouts/indexKhach.php");
            }
        }
    }

include '../../views/admin/login.php';
