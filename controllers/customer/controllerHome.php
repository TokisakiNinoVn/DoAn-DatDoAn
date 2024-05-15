<?php
include '../../config.php';

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8");

session_start();

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result === false) {
    die("Lỗi truy vấn: " . $conn->error);
}

$sql = "SELECT id, name FROM categorys";
$result2 = $conn->query($sql);

if(isset($_GET['search'])){
    $search_query = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search_query%'";
    $result = $conn->query($sql);
    if (!$result) {
        die("Lỗi truy vấn: " . $conn->error);
    }
} else {
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if (!$result) {
        die("Lỗi truy vấn: " . $conn->error);
    }
} 
