<?php
include '../../controllers/customer/controllerThanhToan.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
</head>
<body>
    <h1>Thanh toán</h1>
    <form action="<?=BASE_URL . 'controllers/customer/controllerThanhToan.php';?>" method="POST">
        <label for="payment_method">Chọn hình thức thanh toán:</label>
        <select name="payment_method" id="payment_method">
            <option value="online">Thanh toán online</option>
            <option value="offline">Thanh toán trực tiếp</option>
        </select>
        <label for="delivery_method">Chọn hình thức giao hàng:</label>
        <select name="delivery_method" id="delivery_method">
            <option value="at_store">Ăn tại cửa hàng</option>
            <option value="take_away">Mang về</option>
        </select>
        <input type="submit" value="Xác nhận thanh toán">
    </form>

</body>
</html>
