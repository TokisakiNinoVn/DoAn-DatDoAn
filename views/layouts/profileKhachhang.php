<?php
include '../../controllers/customer/controllerViewInfo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@<?php echo $username; ?> | Profile</title>
    <link rel="stylesheet" href="<?=BASE_URL?>css/customers/profile.css">
</head>
<body>
    <div class="main">
        <form id="profileForm">
            <div class="span_title">
                <span class="title1">Hồ Sơ Của Tôi</span>
                <span class="title2">Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
            </div>
            <div class="change_info">
                <div class="left_change">
                    <table>
                        <tr>
                            <td class="akwau">
                                <label for="username">Tên đăng nhập</label>
                            </td>
                            <td>
                                <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="akwau">
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="akwau">
                                <label for="address">Địa chỉ</label>
                            </td>
                            <td>
                                <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="akwau">
                                <label for="phone">Số điện thoại</label>
                            </td>
                            <td>
                                <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="right_change">
                    <div class="avatar">
                        <a href="https://nino.is-a.dev/"><img src="<?= BASE_URL ?>upload/avt/<?php echo $avatar; ?>" alt=""></a>
                        <input type="file" id="avatar" name="avatar">
                    </div>
                </div>
                
            </div>
            
            <button class="btn_save" type="submit">Lưu</button>
        </form>

        <a class="back_to_home" href="<?= BASE_URL ?>views/layouts/home.php"> 
            <ion-icon name="chevron-back-outline"></ion-icon>&nbsp;
            Qua lại trang chủ
        </a>
        <a class="back_to_home" href="<?= BASE_URL ?>views/layouts/loginOnline.php"> 
            <ion-icon name="log-out-outline"></ion-icon>&nbsp;
            Đăng xuất
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () { 
            setInterval(function() {
                window.location.reload();
            }, 60000); // 5000 milliseconds = 5 seconds
        });

    document.getElementById('profileForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn form gửi dữ liệu đi

        // Lấy dữ liệu từ form
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const address = document.getElementById('address').value;
        const phone = document.getElementById('phone').value;
        const avatar = document.getElementById('avatar').files[0];

        // Tạo đối tượng FormData để chứa dữ liệu
        const formData = new FormData();
        formData.append('username', username);
        formData.append('email', email);
        formData.append('address', address);
        formData.append('phone', phone);
        formData.append('avatar', avatar);

        // Gửi dữ liệu đến server để cập nhật thông tin khách hàng
        fetch('../../controllers/customer/controllerUpdateInfo.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Cập nhật thông tin thành công! 👌');
                window.location.reload();
            } else {
                // alert('Cập nhật thông tin thất bại! 🤔');
                alert('Bạn không có quyền thực hiện cập nhật thông tin.! 🤔');
                window.location.reload();
            }
        })
        .catch(error => console.error('Error:', error));
    });
    </script>
    <script src="<?=BASE_URL?>js/customers/profile.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
