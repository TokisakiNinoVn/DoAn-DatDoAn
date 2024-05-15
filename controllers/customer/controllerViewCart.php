<?php
session_start();

require_once '../../config.php';

if (!isset($_SESSION['user_id'])) {
    header("location: " . BASE_URL . "views/layouts/loginOnline.php");
    exit();
}

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Lấy id của người dùng từ session
$id_users = $_SESSION['user_id'];

// Truy vấn dữ liệu giỏ hàng của người dùng
$sql = "SELECT * FROM giohang_khach WHERE id_users = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

// Biến để tính tổng giỏ hàng
$total_cart = 0;
$total_products = 0;

// Hiển thị thông tin giỏ hàng trong bảng
echo "<table border='1'>";
echo 
"<tr class='text_boss'>
    <td class='text_boss' >Ảnh xem trước</td>
    <td class='text_boss' >Tên sản phẩm</td>
    <td class='text_boss' >Số lượng</td>
    <td class='text_boss' >Tổng giá</td>
    <td class='text_boss' >Thao tác</td>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><img src='" . BASE_URL ."upload/products/". $row['image_product'] . "' alt='Ảnh sản phẩm'style='width: 200px; height: 200px;'></td>";
    echo "<td>" . $row['name_product'] . "</td>";
    echo "<td>" . $row['soluong'] . "</td>";
    echo "<td>" . $row['tong_gia'] . "</td>";
    echo "<td><button class='delete_product' data-product-id='" . $row['id'] . "'><ion-icon style='font-size: 20px;' name='close-outline'></ion-icon></ion-icon>Xóa</button> </td>";
    echo "</tr>";

    // Cập nhật tổng giỏ hàng
    $total_products += $row['soluong'];
    $total_cart += $row['tong_gia'];
}
echo "</table>";

// echo "<p>Tổng món ăn: " . $total_products . "</p>";
// echo "<p>Tổng giỏ hàng: " . $total_cart . "</p>";

$stmt->close();
$conn->close();