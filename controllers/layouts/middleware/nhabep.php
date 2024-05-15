<?php 


if (!isset($_SESSION['user_nhabep'])) {
	header("Location:login.php");
}
