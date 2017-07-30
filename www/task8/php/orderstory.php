<?php
include 'connection.php';
$userId = $_SESSION['id'];
$order_id =[];
$product_id = [];
$quantity = [];
$sum = [];
$sql = "SELECT * FROM  `orders_info` WHERE  `user_id` = '$userId'";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $order_id[] = $row["order_id"];
    $product_id[] = $row["product_id"];
    $quantity[] = $row["quantity"];
    $sum[] = $row["sum"];
    //var_dump($arr);
}

$test = [$order_id, $product_id,  $quantity, $sum];
//var_dump($test);

echo json_encode($test);
//$test = mysqli_fetch_all($result, MYSQLI_NUM);
//var_dump($arr);































//$test1 = mysqli_num_rows($result);
//var_dump($test1);
//if ($result = mysqli_query($connect, $sql)) {
//    while ($row = mysqli_fetch_row($result)) {
//        printf ("%s (%s)\n", $row[0], $row[1]);
//    }
//    mysqli_free_result($result);
//}
//$test = mysqli_fetch_row($result);
//while ($test = mysqli_fetch_row($result)) {
//    echo $test;
//}



//mysqli_close($connect);

