    <!DOCTYPE html>
    <html>
    <head>
        <title>Danh sách thành viên</title>
        <link rel="stylesheet" href="<?= BASE_URL ?>css/admin.css">
        
    
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?= BASE_URL ?>js/admin.js"></script>
        
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
                                <a href="danhsach.php">Category</a>
                            </li>
                            
                            </ol>
                            <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;" onclick="location.href='them.php'">Thêm category</button>
                            <div style="clear: both;"> </div>
                    </div>                    
                    </div>
                    
                    <div style="margin-left: 33px;padding-top: 30px;">
                        <table class="table master-table table-striped table-hover" >
                        <thead style="padding-bottom: 10px;">
                            <th>#</th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Loại</th>
                            <th>Tác Giả</th>
                            <th>Trạng thái</th>
                            <th>Ngày cập nhật</th>
                        </thead>
                        <tbody  class="ui-sortable ">
                            <?php $i=1 ?>
                            <?php foreach($category as $ca): ?>
                            <tr class="ui-state-default" id="<?php echo $ca["id"] ?>" data="<?php echo htmlentities($ca["name"])  ?>" id='item_<?php echo($ca["id"]) ?>'>
                                <td style="color:#645a5a ;font-size: 12px;"><?php echo "#".$i; ?></td>
                                <td><?php echo $ca["id"] ?></td>
                                <td class="category-name">
                                    <a style="text-decoration: none;" >
                                        <i style="margin-right: 5px" class="fa fa-folder-open" aria-hidden="true"></i><span><?php echo htmlentities($ca["name"])  ?></span>
                                    </a>
                                </td>  
                                <td>Danh mục</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td class="text-right">
                                    <button data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"  style="border-radius: 5px;border: 1px solid blue" class="btn-primary edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" data-placement="top" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa');" style="border: 1px solid red;border-radius: 5px;" class="btn-danger">
                                            <a style="color: white; " href="xoa.php?id=<?php echo $ca['id']?>" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
    <script type="text/javascript">

        $(document).ready(function(){
            


            $('.edit').click(function (e) {
                    e.preventDefault();
                    var $tr = $(this).closest('tr');
                    
                    //var category = $.parseJSON($tr.attr('data'));
                    var category = $tr.attr('data');
                    
                    var $grid = $tr.find('.category-name');
                    $grid.find('>a').hide();

                    if ($grid.find('.input-group').length == 0) {
                        $grid.append(`
                            <div class="input-group "  >
                                
                                
                                    <input type="text" id="name-new" name="category_name" class="form-control" style="width: auto" value="`+ category +`"  autofocus >
                                    <button type="button" class="btn btn-default save"><i class="fa fa-save"></i></button>
                                                
                            </div>
                        
                        `);                         
                    }
                        
                });
            $(document).off('click').on('click', '.save', function (e) {
                    var $tr = $(this).closest('tr');

                    var category = $('#name-new').val();
                    var id = $tr.attr('id');
                    var $input = $(this).closest('.input-group').find('input[name="category_name"]');
                    if (category == '') {
                        $input.parent().addClass('has-error');

                        $input.focus();
                    
                        return false;
                    }

                    $.ajax({
                        url:"sua.php",
                        type:"POST",
                        data:{category:category,id:id},
                        success:function(data){
                            
                        var $grid = $tr.find('.category-name');
                        
                        $grid.find('>a').show();
                        $grid.find('.input-group').remove();
                        $grid.find('>a span').html(category);
                        $tr.attr('data',category);
                        
                        }
                    });


                    //  $.ajax({
                    //     type: 'post',
                    //     url: 'them.php';
                    //     data: {
                    //         category:category,id:id
                    //     },
                        
                    //     success: function (data) {
                            
                    //     },
                    // });
            });
        });
    </script>
    </html>

