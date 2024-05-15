<?php
    // include '../../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link rel="icon" href="https://raw.githubusercontent.com/TokisakiNinoVn/MyOfficialWebsite/main/assets/image/Avt_cicle.ico">
    <link rel="stylesheet" href="<?= BASE_URL;?>css/login.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>css/style.css">
</head>

<body> 
    <div class="main_login">
        <a href="https://nino.is-a.dev/" target="_blank" rel="noopener noreferrer">
            <img class="imgLogin" src="<?= BASE_URL;?>upload/order/loginElysia.jpg" alt="Nino" class="logo">
        </a>
        <?php if (isset($errors['name'])) : ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    toastr.error("<?php echo $errors['name'] ?>","",{
                        "closeButton": true,                           
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-left",                                           
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp"
                        });
                });
            </script>
        <?php endif ?>
        <form method="post" action="<?=BASE_URL . 'controllers/layouts/login.php';?>">
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" autofocus required >
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" required>
            </div>
            <div class="checkbox">
            <!-- <label><input type="checkbox" value="1"> Remember me</label> -->
            </div>
            <button type="submit" class="btn btn-primary btn_dnhap" name="btn_dnhap">Login</button>
            <!-- <button type="submit" class="btn btn-primary" name="btn_forgot">Forgot password</button>             -->
        </form>
    </div>
    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    <a class="link_to_more" href="<?= BASE_URL;?>views/layouts/morong.php">
        <span class="more_web">Xem thêm thông tin</span>
        <ion-icon name="information-outline"></ion-icon>
    </a>

    <script>
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '203783060187992',
        cookie     : true,
        xfbml      : true,
        version    : 'v5'
        });
        
        FB.AppEvents.logPageView();   
        
    };
    
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>