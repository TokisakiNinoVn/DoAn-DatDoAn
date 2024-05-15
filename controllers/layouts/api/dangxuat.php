<?php 
	include '../../../core.php';

	if (isset($_SESSION['id_user'])){
        unset($_SESSION['id_user']);
    }

    setcookie("remember_token", '', 0, '/');
	
	
	header("location:../index.php");
