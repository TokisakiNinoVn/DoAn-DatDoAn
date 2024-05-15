<?php 

include '../../../core.php';
include '../../../models/layouts/index.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$thongtin = check_user($email , $pass);
if($thongtin){
	$_SESSION['id_user']=$thongtin['id'];
	setcookie("remember_token", $thongtin['remember_token'], time() + 36000000, '/');
	echo "1";
} else {
	echo "0";
}