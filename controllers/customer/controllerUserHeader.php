<?php
// include '../../config.php';
// // $conn = new mysqli('localhost', 'root', '', 'qldoan');
// $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
// if ($conn->connect_error) {
//     die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
// }

// $conn->set_charset("utf8");

// // session_start();
// if (!isset($_SESSION['user_id'])) {
//     // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
//     header("location: " . BASE_URL . "views/layouts/loginOnline.php");
//     exit();
// }
// $id_users = $_SESSION['user_id'];

// $sql = "SELECT * FROM khachhang WHERE id = '$id_users'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $username = $row['username'];
//     $avatar = $row['avatar_user'];
// }
