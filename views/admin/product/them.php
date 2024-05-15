<!DOCTYPE html>
<html>
<head>
    <title>Thêm món ăn</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>js/admin.js">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>#btnThemFile{width:70px; border:solid 1px green; color:green; padding:10px; text-align:center}</style>
</head>
<body>
</form>
    <div style="margin-top: 5px;">
        <div class="col-md-2">
            
            <?php include __DIR__ . '/../patials/menu.php' ?>
        </div>
        <div class="col-md-10">
            <div class="content" style="margin-right: 50px;">
                <div class="" style="padding-left: 33px;">
                   
                        <ol class="breadcrumb" style="float: left;">
                        <li>
                            <a href="danhsach.php">Danh mục gốc</a>
                        </li> 
                        
                        
                        </ol>
                        <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;" onclick="location.href='them.php'">Thêm</button>
                    
                </div>

                <div style="margin-left: 33px;">
                    
                     <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        <small>Thêm sản phẩm</small>
                                    </h1>
                                </div>
                                
                                <div class="col-lg-7" style="padding-bottom:120px">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input class="form-control" name="name"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category"  class="form-control category" >
                                                <?php foreach($category as $category): ?>
                                                <option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Giá</label>
                                            <input class="form-control" name="unit_price" type="number"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Img Chính</label>
                                            <div id="chonFile">
                                                <input name='filechinh' type='file' />
                                            </div>
                                        </div>
                                        <!-- <div id="btnThemFile">Thêm file</div> -->

                                        
                                        
                                        <button type="submit" class="btn btn-primary" name="save">Thêm sản phẩm</button>
                                        
                                    <form>
                                </div>
                            </div>                           
                        </div>
            
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var id =$('.category').val();  
            $.get("../ajax/type_product.php",{id:1},function(data){
                        $('.type').html(data);
                });
            $('.category').change(function(){
                var id =$(this).val();             
                $.get("../ajax/type_product.php",{id:id},function(data){
                        $('.type').html(data);
                });
            });
            // $("#btnThemFile").click(function(){
            //     $("#chonFile").append("<br/><input name='avatar[]' type='file' />");    
            // }); 
        });
    </script>
</body>
</html>