<?php
include 'connection.php';
$userId = $_SESSION['id'];
$sql = "SELECT * FROM  `orders_info` WHERE  `user_id` = '$userId'";
$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $order[] = ['order_id' => $row["order_id"], 'product_id' => $row["product_id"], 'quantity' => $row["quantity"], 'sum' => $row["sum"]];
}

echo json_encode($order);;































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

