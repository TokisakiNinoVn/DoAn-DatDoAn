<?php

include '../../core.php';
include '../../models/layouts/index.php';
include 'middleware/order.php';
$index=new index();

$ban_an = $index->get_table();

// header('location: views/layouts/ban.php');
