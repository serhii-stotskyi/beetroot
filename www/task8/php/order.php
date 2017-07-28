<?php
include 'connection.php';
include 'count.php';
$cardName = $_POST['cardName'];
$cardCount = $_POST['cardCount'];
var_dump($cardName);

$user_id = $_SESSION['id'];
$sql = "INSERT INTO  `shop`.`orders` (`user_id` )VALUES ('$user_id')";
$oder = mysqli_query($connect,$sql);

$sql_1="SELECT `id` FROM `product` WHERE  `product_name` =  '$cardName'";
$product_id = mysqli_query($connect,$sql_1);
$row = mysqli_fetch_assoc($product_id);
$id = $row['id'];
var_dump($row);

$sql_3 = "INSERT INTO `orders_info` (`order_id`, `product_id`,`quantity`) VALUES (LAST_INSERT_ID(),'$id','$cardCount')";
$oder_info = mysqli_query($connect,$sql_3);

