<?php
include 'connection.php';
include 'count.php';

$cardName = $_POST['cardName'];
$cardCount = $_POST['cardCount'];


$user_id = $_SESSION['id'];
$sql = "INSERT INTO `orders` (`user_id` )VALUES ('$user_id')";
$oder = mysqli_query($connect, $sql);

$sql_1 = "SELECT `id` FROM `product` WHERE  `product_name` =  '$cardName'";
$product_id = mysqli_query($connect, $sql_1);
$row = mysqli_fetch_assoc($product_id);
$id = $row['id'];

$sql_3 = "INSERT INTO `orders_info` (`order_id`, `user_id`, `product_id`,`quantity`, `sum`) VALUES (LAST_INSERT_ID(), '$user_id', '$id','$cardCount', '$sum')";
$oder_info = mysqli_query($connect, $sql_3);

