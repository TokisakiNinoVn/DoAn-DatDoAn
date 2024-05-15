<?php
include '../../config.php';

// Kết nối đến CSDL
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    session_start();

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['user_id'])) {
        // Chuyển hướng người dùng đến trang đăng nhập
        header("location: " . BASE_URL . "views/layouts/loginOnline.php");
        exit();
    }

    // Lấy id của người dùng từ session
    $id_users = $_SESSION['user_id'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     if ($id_users == 1) { echo json_encode(array("success" => false, "message" => "Bạn không có quyền thực hiện cập nhật thông tin.")); exit();}

    // Kiểm tra xem có file được tải lên không
    if(isset($_FILES['avatar'])){
        $avatar = $_FILES['avatar']['name']; // Tên file
        $avatar_tmp = $_FILES['avatar']['tmp_name']; // Đường dẫn tạm thời
        move_uploaded_file($avatar_tmp,"../../uploads/avatar/$avatar"); // Di chuyển file vào thư mục uploads/avatar
    } else {
        // Nếu không có file mới được tải lên, giữ nguyên ảnh từ cơ sở dữ liệu
        $sql_get_avatar = "SELECT avatar_user FROM khachhang WHERE id = ?";
        $stmt = $conn->prepare($sql_get_avatar);
        $stmt->bind_param("i", $id_users);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $avatar = $row['avatar_user'];
        } else {
            $avatar = ''; // Không tìm thấy ảnh trong cơ sở dữ liệu
        }
        $stmt->close();
    }

    // Cập nhật thông tin khách hàng trong CSDL
    $sql = "UPDATE khachhang SET username = ?, email = ?, addr = ?, sdt = ?, avatar_user = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $username, $email, $address, $phone, $avatar, $id_users);

    if ($stmt->execute()) {
        // Cập nhật thành công
        echo json_encode(array("success" => true, "message" => "Cập nhật thông tin thành công."));
    } else {
        // Cập nhật thất bại
        echo json_encode(array("success" => false, "message" => "Cập nhật thông tin thất bại: " . $stmt->error));
    }
    // Đóng kết nối
    $stmt->close();
    $conn->close();
}