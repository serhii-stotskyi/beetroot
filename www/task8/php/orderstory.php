<?php
include 'connection.php';
$userId = $_SESSION['id'];
$sql = "SELECT * FROM  `orders_info` WHERE  `user_id` = '$userId'";
$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $order[] = ['order_id' => $row["order_id"], 'product_id' => $row["product_id"], 'quantity' => $row["quantity"], 'sum' => $row["sum"]];
}

echo json_encode($order);;
