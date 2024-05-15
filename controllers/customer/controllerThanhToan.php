<?php
session_start();
require_once '../../config.php';

if (!isset($_SESSION['user_id'])) {
    header("location: " . BASE_URL . "views/layouts/loginOnline.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_method = $_POST["payment_method"];
    $delivery_method = $_POST["delivery_method"];
    $total_products = $_POST["total_products"];
    $total_cart = $_POST["total_cart"];

    $id_users = $_SESSION['user_id'];

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");


    // Cập nhật type_pay dựa trên payment_method
    $type_pay = ($payment_method === 'online') ? 0 : 1;
    $status_bill = ($payment_method === 'online') ? 1 : 0;

    // Thêm thông tin đơn hàng vào bảng hoadon_khach
    $sql = "INSERT INTO hoadon_khach (id_users, tong_slsp, status_bill, tong_hoadon, type_pay, an_o_quan, ngay) VALUES (?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Lỗi truy vấn SQL: " . $conn->error);
    }
    $stmt->bind_param("iiiiis", $id_users, $total_products, $status_bill, $total_cart, $type_pay, $delivery_method);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Xóa giỏ hàng sau khi đã thanh toán thành công
        $sql_delete_cart = "DELETE FROM giohang_khach WHERE id_users = ?";
        $stmt_delete_cart = $conn->prepare($sql_delete_cart);
        if (!$stmt_delete_cart) {
            die("Lỗi truy vấn SQL: " . $conn->error);
        }
        $stmt_delete_cart->bind_param("i", $id_users);
        $stmt_delete_cart->execute();

        echo "<script>
            setTimeout(function() {
                alert('Thanh toán thành công!');
                window.location.href = '../../views/layouts/home.php';
            }, 1000);
          </script>";
        
        // Đóng câu lệnh chuẩn bị xóa giỏ hàng
        $stmt_delete_cart->close();
    } else {
        echo "Có lỗi xảy ra khi thanh toán. Vui lòng thử lại!";
    }

    // Đóng câu lệnh chuẩn bị thêm đơn hàng
    $stmt->close();
    $conn->close();
}