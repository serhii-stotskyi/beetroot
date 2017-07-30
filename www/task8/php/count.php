<?php
include 'connection.php';
$cardName = $_POST['cardName'];
$cardCount = $_POST['cardCount'];
$promo = $_POST['promo'];
$response = [];
/**
 * @param $cardCount
 * @param $cardName
 * @param int $sale
 * @return mixed
 */
function getOrderPrice($cardCount, $cardName, $sale = 0)
{
    global $connect;

    $getPriceSql = "SELECT `price` FROM `product` WHERE  `product_name` =  '$cardName'";
    $orderPrice = mysqli_fetch_assoc(mysqli_query($connect, $getPriceSql));
    return ($cardCount * $orderPrice['price']) * (100 - $sale)/100;
}

if (!empty($promo)) {
    $sql = "SELECT sale FROM  `promo_code` WHERE  `code` =  '$promo' 
            AND  `is_active` =  '1'";
    $promo_sql = mysqli_query($connect, $sql);
    $sale = mysqli_fetch_assoc($promo_sql);

    if ($sale['sale']) {
        $sum = getOrderPrice($cardCount, $cardName, $sale['sale']); // спросить почему так?
        $response['message'] = "Promo code successfully applied, sale is " . $sale['sale'];
    } else {
        $sum = getOrderPrice($cardCount, $cardName);
        $response['message'] = "Promo code is not correct ";
    }
} else {
    $sum = getOrderPrice($cardCount, $cardName);
}

$response['sum'] = $sum;
echo json_encode($response);
