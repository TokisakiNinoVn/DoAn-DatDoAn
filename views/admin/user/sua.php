<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin thành viên</title>
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
                        <li>
                            <a href="#">Sửa thông tin</a>
                        </li>
                        
                        </ol>
                        
                    
                </div>

                <div style="margin-left: 33px;">
                     <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        <small>Sửa thông tin</small>
                                    </h1>
                                </div>
                                
                                <div class="col-lg-7" style="padding-bottom:120px">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value="<?php echo($user_by_id['name'])?>"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?php echo($user_by_id['email']) ?>" name="email" type="text"  required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Chức vụ</label>
                                            <select name="toprole"  class="form-control category" >
                                                <option <?php if($user_by_id['toprole']==1) echo "selected='selected'" ?> value="1">ADMIN</option>
                                                <option <?php if($user_by_id['toprole']==2) echo "selected='selected'" ?> value="2">ORDER</option>
                                                <option <?php if($user_by_id['toprole']==3) echo "selected='selected'" ?> value="3">NHÀ BẾP</option>
                                                
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                                        
                                    <form>
                                </div>
                            </div>                           
                        </div>
            
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>