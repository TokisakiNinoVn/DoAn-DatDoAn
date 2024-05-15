<?php
session_start();

require_once '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kết nối đến CSDL
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Xử lý đăng nhập
    $sql = "SELECT * FROM khachhang WHERE username = '$username' AND passw = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Đăng nhập thành công
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        header("location: " . BASE_URL . "views/layouts/home.php");
    } else {
        // Đăng nhập không thành công
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }

    $conn->close();
}

