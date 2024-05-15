<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/admin.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>js/admin.js">
    <link rel="stylesheet" href="<?= BASE_URL ?>js/jquery-3.2.1.min.js">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/4e28125301.js"></script>

    <script type="text/javascript" src="<?= BASE_URL ?>js/admin.js"></script>
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
                            <a href="danhsach.php">Chi tiết sản phẩm</a>
                        </li>
                        
                        </ol>
                        
                    <div style="clear: both;"></div>
                </div>
                <div style="margin-left: 33px;">
                    
                    
                    <table class="table master-table table-striped table-hover"  >
                        <thead>
                            
                            <th>ID</th>
                            <th>IMG</th>
                            <th>Name</th>
                            
                            <th>Số lượng</th>
                            
                        </thead>
                        <tbody id="data">
                            <?php foreach($bill_detail as $bill_detail): ?>
                            <tr>
                                
                                <td ><span class="id"><?php echo $bill_detail['id_bills_detail'] ?></span></td>
                                <td><img style="height: 70px;width:70px;" src="../../../upload/products/<?php echo $bill_detail['img'] ?>" alt=""></td>
                                <td style="max-width: 340px;"><?php  echo $bill_detail['name'] ?></td>
                                
                                <td><?php echo $bill_detail['soluong'] ?></td>
                                
                                
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <div style="clear: both;"></div>
                        
                    </table>
                </div>

                
            </div>
            
            
            
            <!-- <input type="text" hidden="" class="id_type" value="<?php echo $id_type = isset($_GET['id']) ? $_GET['id'] : null; ?>"> -->
        </div>
    </div>
    
   

    

   
</body>

</html>