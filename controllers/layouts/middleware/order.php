<?php 
if (!isset($_SESSION['user_order'])) {
	header("Location:login.php");
}
