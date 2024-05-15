<?php
    include "../../global.php";
    // include '../../controllers/customer/controllerViewCart.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link rel="stylesheet" href="<?= localhost;?>css/customers/cartKhach.css">
</head>
<body>

    <h1>Giỏ hàng</h1>


    <?php
        require '../../controllers/customer/controllerViewCart.php';
    ?>

    <div class="navbar_card">
        <div class="back_home">
            <ion-icon name="caret-back-outline"></ion-icon>
            <a href="<?= localhost; ?>views/layouts/home.php">Quay lại</a>
        </div>
        <div class="main_nav_cart">
            <span>Tổng số lượng món ăn: <span class="tong_slsp"><?= $total_products ?>.</span></span>
            <span>Tổng thanh toán: <span class="tong_giohang"><?= $total_cart ?> VND.</span></span>
        </div>
        <div class="check_buy">
            <button class="view_thanhtoan">Thanh Toán <ion-icon name="caret-forward-outline"></ion-icon></button>
        </div>
    </div>
    
    <div class="main_form_thanhtoan">
        <div class="add_form">
            <h1>Thanh toán</h1>
            <ion-icon class="icon_close" name="close-outline"></ion-icon>
            <form class="form_thanhtoan" action="<?=BASE_URL . 'controllers/customer/controllerThanhToan.php';?>" method="POST">
                <div class="left_form">
                    <div class="imageqr">
                        <img class="qrbank qr_image active" src="<?= BASE_URL ?>upload/qrthanhtoan/qrBank.jpg" alt="QR Bank">
                        <img class="qrmomo qr_image" src="<?= BASE_URL ?>upload/qrthanhtoan/qrMomo.jpg" alt="QR Momo">
                    </div>
                    <a class="download_image" href="<?= BASE_URL ?>upload/qrthanhtoan/qrBank.jpg" download="qrBank.jpg"><ion-icon name="download-outline"></ion-icon>Tải xuống mã QR</a>
                </div>
                <div class="right_form">
                    <input type="hidden" name="total_products" value="<?= $total_products ?>">
                    <input type="hidden" name="total_cart" value="<?= $total_cart ?>">
    
                    <span>Tổng số lượng món ăn:<span class="tong_slsp"><?= $total_products ?>.</span></span>
                    <span>Tổng thanh toán: <span class="tong_giohang"><?= $total_cart ?> VND.</span></span>
                    <label for="payment_method">Hình thức thanh toán:</label>
                    <select class="pay_type" name="payment_method" id="payment_method">
                        <option value="online">Thanh toán online</option>
                        <option value="offline">Thanh toán trực tiếp</option>
                    </select>
                    <div class="options_pay active">
                        <label for="payment_method">Chuyển tiền qua</label>
                        <div class="options">
                            <select class="menuType" name="" id="">
                                <option value="1">Ngân hàng</option>
                                <option value="2">Momo</option>
                                <option value="3">Paypal</option>
                            </select>
                        </div>
                    </div>
                    <label for="delivery_method">Hình thức</label>
                    <select name="delivery_method" id="delivery_method">
                        <option value="at_store">Ăn tại cửa hàng</option>
                        <option value="take_away">Mang về</option>
                    </select>

                    <input class="btn_qiua" id="submitButton" type="submit" value="Xác nhận thanh toán">
                    <div class="btn_qiua cancel_pay">Hủy thanh toán</div>
                </div>
            </form>
        </div>
    </div>


    <script>
        document.querySelectorAll('.delete_product').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                fetch('../../controllers/customer/controllerDeleteProduct.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'product_id=' + encodeURIComponent(productId)
                })
                .then(response => {
                    if (response.ok) {
                        // Refresh the page or update the cart section as needed
                        location.reload(); // Example: reload the page
                    } else {
                        console.error('Failed to delete product from cart');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
    <!-- <script src=""></script> -->
    <script src="<?= BASE_URL ?>js/customers/thanhtoanKhach.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>