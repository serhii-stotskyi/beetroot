<?php
include 'connection.php';
include 'function.php';

$productName = $_POST['productName'];
if (!empty($_POST['productCount'])) {
    $productCount = $_POST['productCount'];
} else {
    $productCount = 1;
}
$userId = $_SESSION['id'];
$promo = $_POST['promo'];

$sum = getSum($promo, $productCount, $productName);

if (!empty($productName)) {
    $productAvailable = mysqli_query($connect, "SELECT `available` FROM `product` WHERE  `product_name` =  '$productName'");
    $available = mysqli_fetch_assoc($productAvailable);
    if ($productCount > $available['available']) {
        $response['message'] = "Not enough goods";
    } else {
        $oder = mysqli_query($connect, "INSERT INTO `orders` (`user_id` )VALUES ('$userId')");

        $productId = mysqli_query($connect, "SELECT `id` FROM `product` WHERE  `product_name` =  '$productName'");
        $row = mysqli_fetch_assoc($productId);
        $id = $row['id'];

        $oderInfo = mysqli_query($connect, "INSERT INTO `orders_info` (`order_id`, `user_id`, `product_id`,`quantity`, `sum`) 
                                                    VALUES (LAST_INSERT_ID(), '$userId', '$id','$productCount', '$sum')");

        $newAvailable = $available['available'] - $productCount;
        $query = mysqli_query($connect, "UPDATE `product` SET `available` = '$newAvailable' WHERE `product`.`id` = '$id'");
        $response['message'] = "Order created";
    }
} else {
    $response['message'] = "You did'nt select the product";
}

echo json_encode($response);
