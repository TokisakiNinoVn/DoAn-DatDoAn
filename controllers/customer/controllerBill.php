<?php
session_start();

require_once '../../config.php';

if (!isset($_SESSION['user_order'])) {
    header("Location: " . BASE_URL . "views/layouts/login.php");
    exit();
}

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$alert_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bill_id'])) {
    $bill_id = $_POST['bill_id'];
    $update_sql = "UPDATE hoadon_khach SET status_bill = 1 WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("i", $bill_id);
    if ($stmt->execute()) {
        $alert_message = "Hóa đơn đã được xác nhận thanh toán.";
    } else {
        $alert_message = "Lỗi khi xác nhận thanh toán.";
    }
    $stmt->close();
}

// Truy vấn tất cả hóa đơn
$sql = "SELECT hoadon_khach.*, khachhang.username 
        FROM hoadon_khach 
        JOIN khachhang ON hoadon_khach.id_users = khachhang.id";
$result = $conn->query($sql);

$bills = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bills[] = $row;
    }
}

$conn->close();