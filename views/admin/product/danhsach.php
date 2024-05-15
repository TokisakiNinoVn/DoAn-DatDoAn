<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>js/admin.js">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>js/jquery-3.2.1.min.js">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/4e28125301.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL ?>js/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
</head>
<body>
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
                        <li>
                            <a href="danhsach.php">Danh mục gốc</a>
                        </li>
                        
                        </ol>
                        <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;" onclick="location.href='them.php'">Thêm sản phẩm</button>
                    <div style="clear: both;"></div>
                </div>
               
                <div style="margin-left: 33px;">
                    <div class="form-group">
                        
                            <input id="seach" style="width: 300px;" class="form-control key" placeholder="Nhập tên sản phẩm cần tìm"  name="key"></input>
                            <button type="submit"  class="btn btn-default seach">Tìm kiếm</button>
                            
                    </div>
                    <div class="text-right" style="margin-bottom: 30px;">
                            <span>Show</span>
                            <select name="" id="sl" style="width: 45px;height:26px; " required="required">
                                 <option value="10">10</option>
                                <option value="20">20</option>
                            </select><span>  per page </span>

                        <span class="page" style="margin-left: 20px;">
                            
                        </span>
                    </div>
                    <table class="table master-table table-striped table-hover"  >
                        <thead>
                            <th>#</th>
                            <th>ID</th>
                            <th>IMG</th>
                            <th>Name</th>
                            <th>Giá</th>
                            <th>Ngày Cập Nhật</th>
                        </thead>
                        <div class="form">
                            <tbody id="data">
                            
                            </tbody>
                            <div style="clear: both;"></div>
                        </div>
                    </table>
                </div>

                
            </div>
            
            
            
            <!-- <input type="text" hidden="" class="id_type" value="<?php echo $id_type = isset($_GET['id']) ? $_GET['id'] : null; ?>"> -->
        </div>
    </div>
    
   

    

    <script>
        $(document).ready(function(){
            
            $.ajax({
                    url:"../ajax/test.php",
                    type:"POST",
                    data:{sotin:10},
                    success:function(data){
                           $(".page").html(data);
                    }
            });
            $("#data").load("../ajax/product_table.php",{ page:1 , sotin : 10});
            
            $("#sl").change(function(){
                var key = $(".key").val();
                var sotin=$(this).val();
                $("#data").load("../ajax/product_table.php",{page:1 , sotin:sotin,key:key});
                
                $.ajax({
                    url:"../ajax/test.php",
                    type:"POST",
                    data:{sotin:sotin,key:key},
                    success:function(data){
                           $(".page").html(data);
                    }
                });
            });
            
           

           $('.seach').click(function(){
                var sotin=$("#sl").val();
                var key = $(".key").val();
                //$.ajax("../ajax/product_table.php", { page: 1, sotin:sotin, key:key });
                // $("#data").load("../ajax/product_table.php?page=1&sotin="+sotin+"&key="+key);
                // console.log("../ajax/product_table.php?page=1&sotin="+sotin+"&key="+key);
                 $.ajax({
                    url:"../ajax/product_table.php",
                    type:"POST",
                    data:{page: 1, sotin:sotin, key:key},
                    success:function(data){
                           $("#data").html(data);
                    }
                });
                $.ajax({
                    url:"../ajax/test.php",
                    type:"POST",
                    data:{sotin:sotin,key:key},
                    success:function(data){
                           $(".page").html(data);
                    }
                });
                

           });
                
          
          
    

           
        });
    </script>
</body>

</html>