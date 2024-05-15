<?php 
	include '../../controllers/layouts/order.php';
?>
<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="UTF-8">
	<title>Nhà bếp</title>
	<!-- Latest compiled and minified CSS & JS -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/4e28125301.js"></script>
	

	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= BASE_URL;?>css/style.css">
	<link rel="stylesheet" href="<?= BASE_URL;?>css/nhabep.css">
	<!-- bang chuyen -->

	
	<script src="js/js.js"></script>
	<script type="text/javascript" src="sticky/jquery.sticky.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		});
	</script>
	<link rel="stylesheet" href="<?php echo BASE_URL ?>css/layout.css">
	
	<script src="<?php echo BASE_URL ?>js/layout.js"></script>
	<script src="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js"></script>

	<style>
		.logout {
			z-index: 9999;
			position: fixed;
			bottom: 50px;
			right: 50px;

			display: flex;
			align-items: center;
			justify-content: center;

			background-color: #03c4034f;
			padding: 5px 10px;
			border-radius: 5px;
		}
		.logout:hover {
			background-color: #03c403f5;
		}
	</style>
</head>

<body>

	<div class="sss" style="display: none;"></div>
	<div class="container" style="margin-top: 50px;">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>IMG</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Bàn</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody  class="data">
				
			</tbody>
		</table>
	</div>

	<a class="logout" style="font-size: 20px" href="<?= BASE_URL ?>controllers/admin/logout.php"><ion-icon style="font-size: 20px; margin-right: 10px" name="log-out-outline"></ion-icon> Đăng xuất</a>

<script type="text/javascript">

	
	$(document).ready(function(){
		
		$(".data").load("<?=BASE_URL . 'controllers/layouts/api/order2.php';?>",{ });
				$.ajax({
					url:'<?=BASE_URL . 'controllers/layouts/api/order3.php';?>',
					type:"POST",
					data:{},
					success:function(data){
						$(".sss").html(data);
						
						
					}
				});
		setInterval( function() {
			$(".data").load("<?=BASE_URL . 'controllers/layouts/api/order2.php';?>",{ });
			
			$.ajax({
					url:'<?=BASE_URL . 'controllers/layouts/api/order3.php';?>',
					type:"POST",
					data:{},
					success:function(data){
						//var check = $(".sss").html(data);
						var dulieu = $(".sss").html();
						if (dulieu < data) {
							$(".sss").html(data);
						} else {
							// alert("ko co");
						}
						
						
					}
				});
			// var check = $(".sss").html();
			// alert(check);
		}, 15000);
						

		
	});
	</script>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>