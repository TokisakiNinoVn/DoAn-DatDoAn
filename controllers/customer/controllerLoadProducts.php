<?php
include '../../config.php';
// include '../../js/customers/home.js';
echo '<script src="' . BASE_URL . 'js/customers/home.js"></script>';

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$category = $_GET['category'];

// Xây dựng câu truy vấn SQL dựa trên danh mục đã chọn
$sql = "SELECT * FROM products";
if ($category != 0) {
    $sql .= " WHERE id_category = " . $category;
}

// Thực thi câu truy vấn SQL
$result = $conn->query($sql);

// Kiểm tra và xử lý kết quả truy vấn
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Hiển thị thông tin sản phẩm
        echo "<div class='product'>";
        echo "<img src='" . BASE_URL . "upload/products/" . $row['img'] . "' alt='" . $row['name'] . "' style='width: 200px; height: 200px;'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>Giá: " . $row['unit_price'] . "</p>";
        echo "<input type='number' class='soluong' min='1' value='1' max='10'>";
        echo "<button class='buy_products' data-product-id='" . $row['id'] . "'>Thêm vào giỏ hàng</button>";
        echo "</div>";
    }
} else {
    echo "Không có sản phẩm nào.";
}
?>

<?php
// Đóng kết nối đến cơ sở dữ liệu
$conn->close();