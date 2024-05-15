<?php
 include '../../../core.php';
include '../../../models/admin/user.php';
include '../middleware/auth.php';

$id_user =isset($_GET['id']) ? (int) $_GET['id'] : false;

if (!$id_user) {
	die("bot foud");
}
$user = new user();
$user->delete_user($id_user);

header("Location: danhsach.php");
