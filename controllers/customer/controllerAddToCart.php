<?php
include '../../config.php';

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

session_start();

$response = array(); // Tạo một mảng để lưu trữ phản hồi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_products = $_POST['id_products'];
    $name_product = $_POST['name_product'];
    $unit_price = $_POST['unit_price'];
    $soluong = $_POST['soluong'];
    $anh_product = $_POST['img'];
    $tong_gia = $unit_price * $soluong;

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['user_id'])) {
        // Chuyển hướng người dùng đến trang đăng nhập
        $response['success'] = false;
        $response['message'] = "Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng!";
    } else {
        // Lấy id của người dùng từ session
        $id_users = $_SESSION['user_id'];

        // Thêm dữ liệu vào bảng giỏ hàng
        $sql = "INSERT INTO giohang_khach (id_users, id_products, name_product, image_product, soluong, tong_gia) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iisssi", $id_users, $id_products, $name_product, $anh_product, $soluong, $tong_gia);

        if (!$stmt) {
            $response['success'] = false;
            $response['message'] = "Lỗi khi chuẩn bị câu truy vấn: " . $conn->error;
        } else {
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                $response['success'] = true;
                $response['message'] = "Sản phẩm đã được thêm vào giỏ hàng thành công! 👌";
            } else {
                $response['success'] = false;
                $response['message'] = "Thêm sản phẩm vào giỏ hàng thất bại!";
            }

            $stmt->close();
        }
    }
}

$conn->close();

echo json_encode($response); // Trả về phản hồi dưới dạng JSON
