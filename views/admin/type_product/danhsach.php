<!DOCTYPE html>
<html>
<head>
    <title>Danh sách thành viên</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>js/jquery-3.2.1.min.js">
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/admin.css">
    

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?= BASE_URL; ?>js/admin.js"></script>
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
                            <a href="../category/danhsach.php">Category</a>
                        </li>
                        <li>
                            <a href=""><?php echo $category['name']; ?></a>
                        </li>
                        
                        </ol>
                        <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;" onclick="location.href='them.php?id=<?php echo $category['id']; ?>'">Thêm type product</button>
                    <div style="clear: both;"></div>
                </div>
                <div style="margin-left: 33px;">
                    <table class="table master-table table-striped table-hover" >
                    <thead>
                        <th>#</th>
                        <th >id</th>
                        <th>Name</th>
                        <th>Loại</th>
                        <th>Trạng thái</th>
                        <th>Ngày cập nhật</th>
                        
                    </thead>
                    <?php $i=1; ?>
                    <?php foreach($type_product as $type_product): ?>
                    <tr>
                        <td style="color:#645a5a ;font-size: 12px;"><?php echo "#".$i; ?></td>
                        <td><?php echo $type_product["id"] ?></td>
                        <td><a href="../product/danhsach.php?id=<?php echo $type_product['id']  ?>" style="text-decoration: none;"><i style="margin-right: 5px" class="fa fa-file" aria-hidden="true"></i><?php echo htmlentities( $type_product["name"]) ?></a></td>  
                        <td>Danh mục</td>
                        <td>...</td>
                        <td>...</td>

                        <td class="text-right">
                            <button data-toggle="tooltip" data-placement="top" title="Xem chi tiết" onclick="location.href='sua.php?id=<?php echo $type_product["id"] ?>&&id_type=<?php echo $id_category ?>'" style="border-radius: 5px;border: 1px solid blue" class="btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button data-toggle="tooltip" data-placement="top" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa');"  style="border: 1px solid red;border-radius: 5px;" class="btn-danger">
                                <a style="color: white; " href="xoa.php?id=<?php echo $type_product['id']?>&&id_type=<?php echo $id_category ?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </button>
                        </td>         
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach ?>
                </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    
</body>
<link rel="stylesheet" href="<?= BASE_URL; ?>js/admin.js">
</html>