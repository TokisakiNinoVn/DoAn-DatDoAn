	<?php
		include '../../controllers/layouts/index.php';
	?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Order</title>
		<!-- Latest compiled and minified CSS & JS -->

		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/4e28125301.js"></script>
		

		<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
		<!-- bang chuyen -->
		<link rel="stylesheet" href="<?= BASE_URL ?>css/layout.css">
		<link rel="stylesheet" href="<?= BASE_URL ?>css/header.css">
		<link rel="stylesheet" href="<?= BASE_URL ?>css/index.css">
		<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
		
	</head>

	<body>

	<input class="id_ban" type="text" hidden value="<?= $id_ban;?>">
	<div class="container" style="margin-top: 10px;">
		<?php include 'pages/header.php'; ?>
		<div class="content" style="margin-top: 5px;	">	
			<div id="products">
				<div class="row">		 
					<?php foreach($sp as $sp): 
						$pr = $index->get_products( $sp['id_product']);
					?> 
					<div class="col-md-4 col-xs-6 cart_item" style="margin-bottom: 30px;">
						<div class="col-md-6">
							<img src="<?= BASE_URL . 'upload/products/' . $pr['img'] ?>" alt="Img preview">
						</div>

						<div class="col-md-6" style="margin-left: -15px">
							<div class="name"><?= $pr['name']; ?></div>
							<div class="name">Số lượng : <input type="number" class="sl" name="quantity" min="1" value="1" class="sl"></div>
							<input type="text" value="<?= $pr['id']; ?>" name="id" hidden>
							<div class="name"> Giá: <?= $pr['unit_price']; ?> đ</div>
							<button type="button"  class="btn order" id='<?=$pr['id'];?>'>Đặt</button>	
						</div>
						
					</div>
					<?php endforeach ?>
				</div>
			</div>

		</div>
		<div class="footer"></div>
	</div>



	<script type="text/javascript">
		$(document).ready(function() {
			var id_ban = $(".id_ban").val();
			
			$(".order").click(function(){
				id = $(this).attr('id');
				var tr = $(this).closest('.cart_item');
				quantity=  $(tr).find('.sl').val();

				
				$.ajax({
					url: "<?=BASE_URL . 'controllers/layouts/cart/add.php';?>",
					type:"POST",
					data:{
						id:id,
						id_ban:id_ban,
						quantity:quantity
					},
					success: function(){
						alert("Đặt món thành công");
						//alert(data);
					}
				});
			});
		});
	</script>

	<!-- dialog -->
	<script src="<?= BASE_URL ?>js/js.js"></script>
	<script src="<?= BASE_URL ?>library/bangchuyen/docs/assets/vendors/highlight.js"></script>
	<script src="<?= BASE_URL ?>library/bangchuyen/docs/assets/js/app.js"></script>
	<script src="<?= BASE_URL ?>js/layout.js"></script>
	<script src="<?= BASE_URL ?>js/jquery-3.2.1.min.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	</body>
</html>