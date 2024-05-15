<?php
session_start();

require_once '../../config.php';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user_id'])) {
    header("location: " . BASE_URL . "views/layouts/loginOnline.php");
    exit();
}

// Kiểm tra xem yêu cầu có phải là POST không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra xem product_id đã được gửi lên hay không
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];

        // Kết nối đến CSDL
        $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($conn->connect_error) {
            die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
        }

        // Xóa sản phẩm khỏi giỏ hàng
        $sql = "DELETE FROM giohang_khach WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        if ($stmt->execute()) {
            // Trả về trạng thái OK nếu xóa thành công
            http_response_code(200);
            echo json_encode(array("message" => "Xóa sản phẩm khỏi giỏ hàng thành công"));
        } else {
            // Trả về lỗi nếu xóa không thành công
            http_response_code(500);
            echo json_encode(array("message" => "Xóa sản phẩm khỏi giỏ hàng thất bại"));
        }

        // Đóng kết nối CSDL
        $stmt->close();
        $conn->close();
    } else {
        // Trả về lỗi nếu không có product_id trong yêu cầu
        http_response_code(400);
        echo json_encode(array("message" => "Thiếu thông tin product_id"));
    }
} else {
    // Trả về lỗi nếu không phải là yêu cầu POST
    http_response_code(405);
    echo json_encode(array("message" => "Phương thức yêu cầu không hợp lệ"));
}
?>
