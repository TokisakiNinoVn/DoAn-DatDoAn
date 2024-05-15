<?php 
	$menu = array(
		array(
				"name"=>"trangchu",
				"label"=>"Trang chủ",
				"link" => "controllers/admin/category/danhsach.php"
			),
		// array(
		// 	"label"=>"Quản lý thư mục","name"=>"quanlithumuc",
		// 	"link"=>"controllers/admin/category/danhsach.php"
		// ),
		array("label"=>"Quản lý đơn hàng","name"=>"quanlidonhang","link"=>"controllers/admin/order/danhsach.php"),
		array("label"=>"Quản lý sản phẩm","name"=>"quanlisanpham","link"=>"controllers/admin/product/danhsach.php"),
		
		array("label"=>"Quản lý thành viên","name"=>"quanlythanhvien","link"=>"controllers/admin/user/danhsach.php"),
		array("label"=>"Đăng xuất","name"=>"","link"=>"controllers/admin/logout.php"),
	);
?>
<script src="https://use.fontawesome.com/4e28125301.js"></script>
<div class="header">
	Restaurant
</div>
<div class="slibar-menu">
	
	<?php foreach($menu as $menu): ?>
		<div class="cha" style="padding: 10px 0 10px 0 ">
			<a href="<?= BASE_URL . $menu['link'] ?>">
				<span class="<?php echo $menu['name'] == $menu_active ? 'active' : '' ?>">
				<?php echo $menu['label']; ?>
				</span>
			</a>
		</div>
	<?php endforeach ?>
	
</div>
<!-- <script>
	$(document).ready(function(){
		$(".con").hide();
		$(".cha").click(function(){

			$(this).next().slideToggle();
			//$(".cha span").removeClass("active");
			//$(this).addClass("active");
		});
		
	});
</script> -->