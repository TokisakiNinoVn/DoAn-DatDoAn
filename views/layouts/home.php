<?php
include '../../controllers/customer/controllerHome.php';
// include '../../controllers/customer/controllerUserHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?=BASE_URL?>css/customers/home.css">
</head>
<body>
    <header>
        <div class="main_header">
            <a href="<?=BASE_URL?>views/layouts/home.php">
                <div class="logo">
                    <img src="<?=BASE_URL?>upload/theme/logoHeader.jpg" alt="Logo">
                </div>
            </a>
            <div class="search_product">
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
                    <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
                </form>
            </div>
            <?php if ($result2->num_rows > 0): ?>
                <select id="category-select">
                    <option value="0">Tất cả</option>
                    <?php while ($row = $result2->fetch_assoc()): ?>
                        <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
                    <?php endwhile; ?>
                </select>
            <?php endif; ?>
            <div class="user_tool">
                <ion-icon name="notifications-outline"></ion-icon>
                <a class="gio_hang" href="<?= BASE_URL ."views/layouts/giohangKhach.php" ?>">
                    <ion-icon name="cart-outline"></ion-icon>
                </a>
                <a class="" href="<?= BASE_URL ."views/layouts/profileKhachhang.php" ?>">
                    <ion-icon name="person-outline"></ion-icon>
                    <!-- <span>Tài khoản</span> -->
                </a>
            </div>
        </div>
    </header>
    <div class="products">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product">
                    <img src="<?= BASE_URL ."upload/products/". $row['img'] ?>" alt="<?= $row['name'] ?>" style="width: 200px; height: 200px;">
                    <h2><?= $row['name'] ?></h2>
                    <p>Giá: <?= $row['unit_price'] ?></p>
                    <input type="number" class="soluong" min="1" value="1" max="10">
                    <button class="buy_products" data-product-id="<?= $row['id'] ?>">Thêm vào giỏ hàng</button>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Không có sản phẩm nào.</p>
        <?php endif; ?>
    </div>
    <script>
        // JavaScript code remains the same
        document.addEventListener('DOMContentLoaded', function() {
            const productsContainer = document.querySelector('.products');

            // Sử dụng event delegation để bắt sự kiện cho các nút "Thêm vào giỏ hàng"
            productsContainer.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('buy_products')) {
                    const button = event.target;
                    const productId = button.getAttribute('data-product-id');
                    const productName = button.parentElement.querySelector('h2').innerText;
                    const productPrice = parseFloat(button.parentElement.querySelector('p').innerText.split(':')[1].trim());
                    const productQuantity = parseInt(button.parentElement.querySelector('.soluong').value);

                    const imgSrc = button.parentElement.querySelector('img').getAttribute('src');
                    const imgName = imgSrc.substring(imgSrc.lastIndexOf('/') + 1); // Lấy tên ảnh từ URL

                    const formData = new FormData();
                    formData.append('id_products', productId);
                    formData.append('name_product', productName);
                    formData.append('unit_price', productPrice);
                    formData.append('soluong', productQuantity);
                    formData.append('img', imgName);

                    fetch('../../controllers/customer/controllerAddToCart.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Kiểm tra kết quả từ server
                        if (data.success) {
                            alert(data.message); // Hiển thị thông báo thành công
                        } else {
                            alert('Thêm sản phẩm vào giỏ hàng thất bại!');
                        }
                    })
                    .catch(error => console.error('Error:', error));

                }
            });

            const categorySelect = document.getElementById('category-select');
            categorySelect.addEventListener('change', function() {
                const categoryId = this.value;

                // Gửi yêu cầu Fetch để tải lại danh sách sản phẩm dựa trên danh mục đã chọn
                fetch(`../../controllers/customer/controllerLoadProducts.php?category=${categoryId}`)
                .then(response => response.text())
                .then(data => {
                    // Xử lý kết quả trả về
                    productsContainer.innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
            });
        });


    </script>
    <script src="<?=BASE_URL?>js/customers/home.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
