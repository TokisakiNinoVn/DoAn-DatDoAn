<?php
include '../../config.php';
include '../../global.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALOHA-FOOD Kính chào quý khách</title>

    <!-- Font web -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=BASE_URL?>css/customers/login.css">
</head>
<body>
    <div class="main_form">

        <div class=" login_form active">
            <div class="main_login_form">
                <form action="<?=BASE_URL . 'controllers/customer/controllerLogin.php';?>" method="POST">
                    <h2>Đăng nhập</h2>
                    <div class="login_input login_input_username">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required placeholder="Nhập username tại đây😉">
                    </div>
                    <div class="login_input login_input_password">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required placeholder="Nhập mật khẩu tại đây 😪">
                    </div>
                    <input type="submit" value="Đăng nhập">
                    <span class="text_register"> Nếu bạn chưa có tài khoản?
                        <span class="switch_register"> Đăng ký</span>
                    </span>
                </form>
            </div>
        </div>
    

        <div class=" register_form">
            <div class="main_register_form">
                <form action="<?=BASE_URL . 'controllers/customer/controllerRegister.php';?>" method="POST">
                    <h2 class="register">Đăng ký</h2>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required placeholder="Email đăng ký 🤔">
                    <label for="reg_username">Username</label>
                    <input type="text" id="reg_username" name="reg_username" required placeholder="Username đăng ký 😯">
                    <label for="reg_password">Password</label>
                    <input type="password" id="reg_password" name="reg_password" required placeholder="Password đăng ký 😳">
                    <input type="submit" value="Đăng ký">
            
                    <span class="text"> Nếu bạn đã có tài khoản?
                        <span class="switch_login"> Đăng nhập</span>
                    </span>
                </form>
            </div>
        </div>
    </div>

    <?php
        if(isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<script>alert('Tên đăng nhập đã tồn tại.')</script>";
        } elseif(isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<script>alert('Đăng ký thành công.')</script>";
        }
    ?>


<script src="<?=BASE_URL?>js/customers/login.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
