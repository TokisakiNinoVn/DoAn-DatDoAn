<?php
include '../../config.php';

// Kết nối đến CSDL
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}
$conn->set_charset("utf8");

session_start(); // Bắt đầu phiên làm việc

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user_id'])) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("location: " . BASE_URL . "views/layouts/loginOnline.php");
    exit();
}

// Lấy ID của người dùng từ session
$id_users = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_products = $_POST['id_products'];
    $name_product = $_POST['name_product'];
    $unit_price = $_POST['unit_price'];
    $soluong = $_POST['soluong'];
    $anh_product = $_POST['img'];
    $tong_gia = $unit_price * $soluong;

    // Cập nhật thông tin khách hàng trong CSDL
    $sql = "UPDATE khachhang SET username = ?, passw = ?, email = ?, addr = ?, sdt = ?, avatar_user = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $username, $password, $email, $address, $phone, $avatar, $id_users);
    
    $username = $_POST['username'];
    $password = $_POST['passw']; // Nếu cần cập nhật password
    $email = $_POST['email'];
    $address = $_POST['addr'];
    $phone = $_POST['sdt'];
    $avatar = $_POST['avatar_user'];

    if ($stmt->execute()) {
        // Cập nhật thành công
        $_SESSION['success_message'] = "Cập nhật thông tin thành công.";
        header("Location: " . $_SERVER['PHP_SELF']); // Reload lại trang
        exit();
    } else {
        // Cập nhật thất bại
        $_SESSION['error_message'] = "Cập nhật thông tin thất bại: " . $stmt->error;
        header("Location: " . $_SERVER['PHP_SELF']); // Reload lại trang
        exit();
    }
}

// Lấy thông tin khách hàng
$sql = "SELECT * FROM khachhang WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $avatar = $row['avatar_user'];
    if ($avatar == '') {
        $avatar = 'none.jpg';
    }
    $email = $row['email'];
    $address = $row['addr'];
    $phone = $row['sdt'];
} else {
    // $_SESSION['error_message'] = "Không tìm thấy thông tin khách hàng";
    header("Location: " . BASE_URL . "views/layouts/profileKhachhang.php");
    exit();
}

// Đóng kết nối
$stmt->close();
$conn->close();
