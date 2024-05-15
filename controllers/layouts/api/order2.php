<?php 

	include '../../../core.php';
	include '../../../models/layouts/index.php';
	include '../../../models/layouts/giohang.php';

	$index =new index();
	$sp =$index->get_order();
	?>
	<?php $row=1;$soluong = 0; foreach($sp as $sp): ?>
						<tr class="cart_item">
							<td><?php echo $row ?></td>
							<td>
								<div>
								<img style="height: 100px;width: 100px;"  src="<?php echo BASE_URL ?>upload/products/<?php echo $sp['img'] ?>" alt="">
								</div>
								
							</td>
							<td>
								<div class="name" ><?php echo $sp['name'] ?></div>
								
							</td>
							<td><div class="name" ><?php echo $sp['soluong'] ?></div></td>
							<td><div class="name" ><?php echo $sp['ban'] ?></div></td>
							<td class="thaotac">
								<a href="<?= BASE_URL. 'controllers/layouts/api/xoa-dat-hang.php?id=' . $sp['id_order'];  ?>"><button class="complete_dish"><ion-icon class="twak" name="checkmark-outline"></ion-icon> Hoàn thành món ăn </button></a>
								<a href="<?= BASE_URL. 'controllers/layouts/api/xoa-dat-hang.php?id=' . $sp['id_order'];  ?>"><ion-icon class="twak kkkei" name="trash-outline"></ion-icon></a>
							</td>
							<td>
								<?php $row++; $soluong++;

								?>
						</tr>
								
						
				<?php endforeach ?>




