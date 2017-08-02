<?php
include 'connection.php';
$productName = $_POST['productName'];
if (!empty($_POST['productCount'])) {
    $productCount = $_POST['productCount'];
} else{
    $productCount = 1;
}
$promo = $_POST['promo'];
$response = [];

/**
 * @param $count
 * @param $name
 * @param int $sale
 * @return float|int
 */
function getOrderPrice($count , $name, $sale = 0)
{
    global $connect;
    $getPriceSql = "SELECT `price` FROM `product` WHERE  `product_name` =  '$name'";
    $orderPrice = mysqli_fetch_assoc(mysqli_query($connect, $getPriceSql));
    return ($count * $orderPrice['price']) * (100 - $sale)/100;
}


if (!empty($promo)) {
    $sql = "SELECT sale FROM  `promo_code` WHERE  `code` =  '$promo' 
            AND  `is_active` =  '1'";
    $promo_sql = mysqli_query($connect, $sql);
    $sale = mysqli_fetch_assoc($promo_sql);

    if ($sale['sale']) {
        $sum = getOrderPrice($productCount, $productName, $sale['sale']);
        $response['message'] = "Promo code successfully applied, sale is " . $sale['sale'];
    } else {
        $sum = getOrderPrice($productCount, $productName);
        $response['message'] = "Promo code is not correct ";
    }
} else {
    $sum = getOrderPrice($productCount, $productName);
}
$response['sum'] = $sum;
echo json_encode($response);
