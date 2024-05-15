
<?php
	$id = isset($_GET['id']) ? $_GET['id'] : 0 ;
	$dt_category = new index();
	$category = $dt_category->get_all_menu_category();
?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114783884-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-114783884-1');
</script>

<div class="header">
	<div class="row">
		<div class="col-md-10">
			<img src="<?php echo BASE_URL ?>upload/products/anhbia2.jpg" width="120%" class="anhbia" height="300px" alt="">
		</div>
	</div>
	
	<div id="menu" style="margin-top: 15px;" >
		<button type="button" class="btn menu <?php if($id==0) echo 'active' ?>" ><a href="index.php?id_ban=<?php echo $id_ban ?>" style="color: black;text-decoration: none;">Trang chủ</a></button>
		<?php foreach($category as $category): ?>
			<button type="button" onclick="location.href='listsp.php?id=<?php echo $category['id'] ?>&id_ban=<?php echo $id_ban ?>'" class="btn menu <?php if($id==$category['id'] ) echo 'active' ?>" ><?php echo $category['name'] ?></button>
		<?php endforeach ?>
		<span style="float: right;">
			<form action="seach.php" method="GET">
				<input type="text" name="key" class="search" placeholder="Search" >
				<input type="text" value="<?php echo $id_ban;?>" name="id_ban" hidden>		
				<button type="submit" class="btn menu">Tìm kiếm</button> 
			</form>
		</span>
	</div>
</div>

<div class="giohoang_vrw" >
	<a href="giohang.php?id_ban=<?php echo $id_ban ?>"  class="shop" title="Giỏ Hàng">
		<ion-icon name="bag-check-outline"></ion-icon>
	</a>
</div>