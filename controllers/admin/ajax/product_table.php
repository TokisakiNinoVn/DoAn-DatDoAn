<?php 

 include '../../../core.php';
include '../../../models/admin/product.php';
include '../middleware/auth.php';
$key = isset($_POST['key']) ? $_POST['key'] : NULL;

//$id_type = isset($_POST['id_type']) ? $_POST['id_type'] : NULL;


$sotin = $_POST['sotin'];

$page = isset($_POST['page']) ? $_POST['page'] :"1";


$from = ($page-1)*$sotin;
$dt_product = new product();
$product = $dt_product->get_all_product($key,$from ,$sotin);
$i = $from+1;
?>

   <?php foreach($product as $pr): ?>
                            <tr>
                                <td style="color:#645a5a ;font-size: 13px;">#<?php echo $i; ?></td>
                                <td ><span class="id"><?php echo $pr['id'] ?></span></td>
                                <td><img style="height: 70px;width:70px;" src="../../../upload/products/<?php echo $pr['img'] ?>" alt=""></td>
                                <td style="max-width: 340px;"><?php  echo $pr['name'] ?></td>
                                <td><?php echo $pr['unit_price'] ?></td>
                                <td>
                                    <select class="tinhtrang" id="<?php echo $pr['id'] ?>">
                                        <option value="1"  <?php if($pr['tinhtrang']==1) echo "selected='selected'"; ?>>Còn hàng </option>
                                        <option value="0" <?php if($pr['tinhtrang']==0) echo "selected='selected'"; ?>>Hết hàng</option>
                                    </select>
                                </td>
                                <td><?php echo $pr['updated_at'] ?></td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title="Xem chi tiết" onclick="location.href='sua.php?id=<?php echo $pr['id'] ?>'" style="border-radius: 5px;border: 1px solid blue" class="btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                
                                    
                                    <button data-toggle="tooltip" data-placement="top" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa');"  onclick="location.href='xoa.php?id=<?php echo $pr['id']?>'" style="border: 1px solid red;border-radius: 5px;" class="btn-danger">
                                            <a style="color: white; " href="xoa.php?id=<?php echo $pr['id']?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </button>
                                </td>
                                
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach ?>  


<script type="text/javascript">
    $('.status').change(function(){
        var status =$(this).val();
        var id =$(this).attr('id');

        $.get("../ajax/ajax_status.php",{status:status,id:id},function(data){
            toastr.success("Cập nhật thành công","",{
            "closeButton": true,                           
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-left",
                                
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
            });
        });

    });
    $('.tinhtrang').change(function(){
        var tinhtrang =$(this).val();
        var id =$(this).attr('id');


        $.get("../ajax/ajax_tinhtrang.php",{tinhtrang:tinhtrang,id:id},function(data){
            toastr.success("Cập nhật thành công","",{
            "closeButton": true,                           
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-left",
                                
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
            });
        });
    });
</script>
