<?php 


 include '../../../core.php';
include '../../../models/admin/product.php';
include '../middleware/auth.php';
$sotin = $_POST['sotin'];
$key = isset($_POST['key']) ? $_POST['key'] : ""; 

$dt_product = new product();
$slpr =  $dt_product->get_all_product($key,-1,-1);
$tongtin=count($slpr);
$tongsotrang=ceil($tongtin/$sotin);

?>


	
    
        <button class="sotrang" onclick="var result = document.getElementById('sotrang'); var sotrang = result.value; if( !isNaN( sotrang ) &amp;&amp; sotrang > 1 ) result.value--;" type="button">–</button>
        <input style="width: 35px;" type="number" max="<?php echo $tongsotrang; ?>" min="1" id="sotrang" value="1">
        <?php echo " or ". $tongsotrang ?>
        <button class="sotrang" onclick="var result = document.getElementById('sotrang'); var sotrang = result.value; if( !isNaN( sotrang ) &&sotrang< <?php echo $tongsotrang;  ?>) result.value++;" class="cong" type="button">+</button>
    


<script type="text/javascript">
	$("#sotrang").change(function(){
                var key = $(".key").val();
                var page=$(this).val();
                var sotin=$("#sl").val();
                 
                $("#data").load("../ajax/product_table.php",{sotin:sotin,page:page,key:key});
            });
    $(".sotrang").click(function(){
        var key = $(".key").val();
        var page=$("#sotrang").val();
        var sotin=$("#sl").val();
        
        $("#data").load("../ajax/product_table.php",{sotin:sotin,page:page,key:key});
    });
</script> 



