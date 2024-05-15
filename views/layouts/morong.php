<?php
    include '../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin về quán</title>
    <link rel="icon" href="https://raw.githubusercontent.com/TokisakiNinoVn/MyOfficialWebsite/main/assets/image/Avt_cicle.ico">

    <link rel="stylesheet" href="<?= BASE_URL;?>css/morong.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>css/style.css">
</head>
<body>
    <div class="main_content">
        <div class="main_top">
            <div class="">
                <img class="img_quan" src="<?= BASE_URL;?>upload/order/loginElysia.jpg" alt="Nino" class="logo">
            </div>
            <div class="content_infor">
                <span class="ten_quan">Aloha-Food Quán 🍀</span>
                <span class="name">"Quán có dev hết đơn 24/24, order là có liền".</span>
                <span class="name">Địa chỉ:Công nghệ thông tin Thái Nguyên.</span>
                <span class="name">Số điện thoại: 0389 707 305.</span>
                <span class="name">Email: doanquan@gmail.com</span>
            </div>
        </div>
        <div class="map_quan">
            <img class="img_map_quan" src="<?= BASE_URL;?>upload/order/mapQuan.png" alt="Nino" class="map">
            <a class="link_map" href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+%26+Truy%E1%BB%81n+th%C3%B4ng+Th%C3%A1i+Nguy%C3%AAn/@21.5838592,105.8047279,17z/data=!3m1!4b1!4m6!3m5!1s0x31352738b1bf08a3:0x515f4860ede9e108!8m2!3d21.5838592!4d105.8073028!16s%2Fg%2F1210gtvy?entry=ttu" target="_blank" rel="noopener noreferrer">Vị trí quán trên map</a>
        </div>
        <!-- <a class="editdev link_map" href="https://nino.is-a.dev/" target="_blank" rel="noopener noreferrer">
            <span class="edit">&copy; 2024, Edited by @tokisakininovn </span>
        </a> -->
    </div>

    <a class="link_to_more" href="<?= BASE_URL;?>views/layouts/login.php">
        <ion-icon name="chevron-back-outline"></ion-icon>
        <span class="more_web">Trang Login</span>
    </a>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>