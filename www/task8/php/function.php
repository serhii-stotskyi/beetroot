<?php

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

/**
 * @param $promo
 * @param $productCount
 * @param $productName
 * @return float|int
 */
function getSum ($promo,$productCount,$productName){
    global $connect;
    if (!empty($promo)) {
        $sql = "SELECT sale FROM  `promo_code` WHERE  `code` =  '$promo' 
            AND  `is_active` =  '1'";
        $promo_sql = mysqli_query($connect, $sql);
        $sale = mysqli_fetch_assoc($promo_sql);

        if ($sale['sale']) {
            $sum = getOrderPrice($productCount, $productName, $sale['sale']);
        } else {
            $sum = getOrderPrice($productCount, $productName);
        }
    } else {
        $sum = getOrderPrice($productCount, $productName);
    }
    return $sum;
}
