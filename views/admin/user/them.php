<!DOCTYPE html>
<html>
<head>
    <title>Thêm thành viên</title>
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
                            <a href="">Thêm user</a>
                        
                        
                        </ol>
                        
                    
                </div>

                <div style="margin-left: 33px;">
                    
                     <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        <small>Thêm user</small>
                                    </h1>
                                </div>
                                
                                <div class="col-lg-7" style="padding-bottom:120px">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value=""  required/>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="" name="email" type="email"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" value="" name="password" type="text"  required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Chức vụ</label>
                                            <select name="toprole"  class="form-control category" >
                                                <option value="1">Admin</option>
                                                <option value="2">ORDER</option>
                                                <option value="3">NHÀ BẾP</option>
                                                
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary" name="save">Thêm thành viên</button>
                                        
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