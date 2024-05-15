<?php
	include '../../controllers/layouts/ban.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt bàn</title>
	<!-- Latest compiled and minified CSS & JS -->
	

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= BASE_URL ?>css/layout.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/header.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/ban.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>

<body>
	<div class="banner">
		<div class="infor_banner">
			<img class="avtOrder" src="<?= BASE_URL ?>upload/order/avtOrder.jpg" alt="Avt">
			<div class="information_order">
				<span class="id_order">ID: 111</span>
				<span class="name">Họ tên: Đỗ Đoàn.</span>
				<span class="adr">Địa chỉ: Thái Nguyên.</span>
				<span class="phone_number">Điện Thoại: 0389707305.</span>
			</div>

			<a style="font-size: 20px" href="<?= BASE_URL ?>controllers/admin/logout.php"><ion-icon style="font-size: 20px" name="log-out-outline"></ion-icon> Đăng xuất</a>
		</div>
	</div>
	<div class="container" style="margin-top: 10px;">
		<?php foreach($ban_an as $ban_an): $id_ban=$ban_an['id']; ?>
			<div class="col-md-3" >
					<div class="table">
						<a href="index.php?id_ban=<?php echo  $ban_an['id'] ?>" style="text-decoration: none;color: black;">
						<div class="ban"  id='<?php echo $ban_an['id'] ?>'>
						<p class="img ">
							<!-- <i class="fas fa-users"></i> -->
							<ion-icon name="fast-food-outline"></ion-icon>
						</p>
						<p class="name"> <span></span><?php echo $ban_an['name'] ?></p>

						</div>	
						</a>
					</div>
			</div>
		<?php endforeach ?>
	</div>
	<div class="back_home">
        <a href="<?= BASE_URL; ?>views/layouts/hoadonKhach.php">Hóa đơn</a>
		<ion-icon name="caret-forward-outline"></ion-icon>
    </div>

	<script src="<?= BASE_URL ?>js/layout.js"></script>
	<script src="<?= BASE_URL ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= BASE_URL ?>js/js.js"></script>
	
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>