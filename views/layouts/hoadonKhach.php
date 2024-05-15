<?php
include '../../controllers/customer/controllerBill.php';
include "../../global.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn khách hàng</title>
    <?php if ($alert_message != ""): ?>
    <script type="text/javascript">
        alert("<?php echo $alert_message; ?>");
    </script>
    <?php endif; ?>

    <link rel="stylesheet" href="<?=BASE_URL?>css/customers/bills.css">
</head>
    <h1>List hóa đơn</h1>
    <table border='1' style="border: 1px solid black;">
        <tr class="text_boss">
            <th>ID</th>
            <th>ID User</th>
            <th>Username</th>
            <th>Tổng Số Lượng Sản Phẩm</th>
            <th>Tổng Hóa Đơn</th>
            <th>Hình Thức Thanh Toán</th>
            <th>Ăn Ở Quán</th>
            <th>Ngày</th>
            <th>Trạng Thái Hóa Đơn</th>
        </tr>
        <?php foreach ($bills as $bill): ?>
        <tr>
            <td><?php echo htmlspecialchars($bill['id']); ?></td>
            <td><?php echo htmlspecialchars($bill['id_users']); ?></td>
            <td><?php echo htmlspecialchars($bill['username']); ?></td>
            <td><?php echo htmlspecialchars($bill['tong_slsp']); ?></td>
            <td><?php echo htmlspecialchars($bill['tong_hoadon']); ?></td>
            <td>
                <?php echo ($bill['type_pay'] == 0) ? 'Online' : 'Offline'; ?>
            </td>
            <td>
                <?php echo ($bill['an_o_quan'] == 'take_away') ? 'Ăn ở quán' : 'Mang về'; ?>
            </td>
            <td><?php echo htmlspecialchars($bill['ngay']); ?></td>
            <td>
                <?php if ($bill['status_bill'] == 1): ?>
                    <button class="ok_pay" disabled>Đã thanh toán</button>
                <?php else: ?>
                    <form method="POST" action="">
                        <input type="hidden" name="bill_id" value="<?php echo htmlspecialchars($bill['id']); ?>">
                        <button class="confilm_pay" type="submit">Xác nhận thanh toán</button>
                    </form>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="back_home">
        <ion-icon name="caret-back-outline"></ion-icon>
        <a href="<?= localhost; ?>views/layouts/ban.php">Quay lại</a>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

