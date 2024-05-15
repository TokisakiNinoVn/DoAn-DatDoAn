<?php
// require_once 'config.php';
require_once '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['reg_username'];
    $password = $_POST['reg_password'];
    $email = $_POST['email'];

    // Kết nối đến CSDL
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Kiểm tra xem username đã tồn tại chưa
    $check_sql = "SELECT * FROM khachhang WHERE username = '$username'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Username đã tồn tại, chuyển hướng về trang đăng nhập và truyền thông báo
        header("location: " . BASE_URL . "views/layouts/loginOnline.php?error=1");
        exit();
    } else {
        // Thực hiện đăng ký
        $insert_sql = "INSERT INTO khachhang (username, passw, email) VALUES ('$username', '$password', '$email')";
        if ($conn->query($insert_sql) === TRUE) {
            // Đăng ký thành công, chuyển hướng về trang đăng nhập và truyền thông báo
            header("location: " . BASE_URL . "views/layouts/loginOnline.php?success=1");
            exit();
        } else {
            echo "Lỗi: " . $insert_sql . "<br>" . $conn->error;
        }
    }

    

    $conn->close();
}
