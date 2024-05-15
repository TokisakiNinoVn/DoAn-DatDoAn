<!DOCTYPE html>
<html>
<head>
    <title>Danh sách thành viên</title>
    
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/admin.css">
    
   
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL ?>js/admin.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    
    <div style="margin-top: 5px;" >
        <div class="col-md-2">
            <?php  include __DIR__ . '/../patials/menu.php' ?>
        </div>
        <div class="col-md-10">
            <div class="content" style="margin-right: 50px;">
                <div class="" style="padding-left: 33px;">
                   <div class="row">
                       <ol class="breadcrumb" style="float: left;">
                        <li>
                            <a href="danhsach.php">Danh mục gốc</a>
                        </li>
                        <li>
                            <a href="danhsach.php">Thành viên</a>
                        </li>
                        
                        </ol>
                        <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;" onclick="location.href='them.php'">Thêm user</button>
                        <div style="clear: both;"> </div>
                   </div>                    
                </div>
                
                <div style="margin-left: 33px;padding-top: 30px;">
                    <table class="table master-table table-striped table-hover" >
                    <thead style="padding-bottom: 10px;">
                        <th>#</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Chức vụ</th>
                        
                        <!-- <th>Ngày cập nhật</th> -->
                    </thead>
                    <tbody  class="ui-sortable ">
                        <?php $i=1 ?>
                        <?php foreach($all_user as $us): ?>
                        <tr class="ui-state-default" id="<?php echo $us["id"] ?>" data="<?php echo htmlentities($us["name"])  ?>" id='item_<?php echo($us["id"]) ?>'>
                            <td style="color:#645a5a ;font-size: 12px;"><?php echo "#".$i; ?></td>
                            <td><?php echo $us["id"] ?></td>
                            <td class="category-name">
                                <a style="text-decoration: none;">
                                    <i style="margin-right: 5px" class="fa fa-folder-open" aria-hidden="true"></i><span><?php echo htmlentities($us["name"])  ?></span>
                                </a>
                            </td>  
                            <td>
                                <?php if($us["toprole"]==1): ?>
                                    ADMIN
                                <?php endif ?>
                                 <?php if($us["toprole"]==2): ?>
                                    ORDER
                                <?php endif ?>
                                 <?php if($us["toprole"]==3): ?>
                                    NHÀ BẾP
                                <?php endif ?>

                            </td>
                            
                            <!-- <td>...</td> -->
                            <td class="text-right">
                                <button data-toggle="tooltip" data-placement="top" title="Xem chi tiết" onclick="location.href='sua.php?id=<?php echo $us['id'] ?>'" style="border-radius: 5px;border: 1px solid blue" class="btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                
                                <button data-toggle="tooltip" data-placement="top" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa');" style="border: 1px solid red;border-radius: 5px;" class="btn-danger">
                                                <a style="color: white; " href="xoa.php?id=<?php echo $us['id']?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </button>
                            </td>         
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    

 
</body>

</html>

