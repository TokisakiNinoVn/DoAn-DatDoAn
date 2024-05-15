<?php	
	include '../../controllers/layouts/listsp.php';
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

	<script src="js/js.js"></script>
	<script type="text/javascript" src="sticky/jquery.sticky.js"></script>
	
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/layout.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/listsp.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/header.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/style.css">
	

</head>

<body>

<input class="id_ban" type="text" hidden value="<?php echo $id_ban;?>">
<div class="container">
	<?php include 'pages/headerNoBanner.php'; ?>
	<div class="content" style="margin-top: 5px">	
		<div id="products">		
				<?php foreach(array_chunk($list_pr,3) as $pr ): ?> 
				<div class="row">	
					<?php foreach($pr as $pr): ?>	
					<div class="col-md-4 col-xs-6 cart_item" style="margin-bottom: 30px;">
						<div class="col-md-6">
							<img src="<?php echo BASE_URL ?>upload/products/<?php echo $pr['img'] ?>" alt="">
							
						</div>
						
						<div class="col-md-6" style="margin-left: -15px">
							<div class="name"><?php echo $pr['name']; ?></div>
							<div class="name">Số lượng : <input type="number" class="sl"  name="quantity" min="1" value="1" class="sl"></div>
							<input type="text" value="<?php echo $pr['id']; ?>" name="id" hidden>
							<div class="name"> Giá: <?php echo $pr['unit_price']; ?> đ</div>
							<button type="submit" class="btn order"id='<?php echo $pr['id']; ?>' >Đặt</button>	
						</div>
						
					</div>
					<?php endforeach ?>	
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
					url:"<?=BASE_URL . 'controllers/layouts/cart/add.php';?>",
					type:"POST",
					data:{id:id,id_ban:id_ban,quantity:quantity},
					success:function(data){
						alert("Đặt thành công");
					}
				});
			});
		});
	</script>

	<script src="<?php echo BASE_URL ?>js/layout.js"></script>
	<script src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>