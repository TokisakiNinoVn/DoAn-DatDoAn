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
                            <a href="danhsach.php">Category</a>
                        </li>
                         <li>
                            <a href="">Thêm</a>
                        </li>
                        
                        </ol>
                        <button type="button" style="float: right;" class="btn btn-success" style="position: absolute;">Thêm</button>
                    <div style="clear: both;"></div>
                </div>
                <div style="margin-left: 33px;">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Thêm</label>
                            <input  type="text" name="name" class="form-control" autofocus>
                            <?php if (isset($errors['name'])) : ?>
                                <p class="error"><?php echo $errors['name'] ?></p>
                            <?php endif ?>
                        </div>                                                 
                        <button type="submit" name="save" class="btn btn-primary">Thêm</button>
                    </form>
                    
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    
</body>
</html>