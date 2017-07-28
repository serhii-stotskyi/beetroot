<?php
include 'connection.php';
$cardName = $_POST['cardName'];
$cardCount = $_POST['cardCount'];
$promo = $_POST['promo'];
$response = [];

/**
 *
 * @param $cardName
 * @param $cardCount
 * @return mixed
 */
function getSum($cardName,$cardCount){
    $sql_1="SELECT `price` FROM `product` WHERE  `product_name` =  '$cardName'";
    global $connect;
    $price_sql = mysqli_query($connect, $sql_1);
    $price = mysqli_fetch_assoc($price_sql);
    return $cardCount * $price['price'];
}

if(!empty($promo)){
    $sql="SELECT * FROM `promo_code`  WHERE  `code` =  '$promo'";
    $promo_sql = mysqli_query($connect, $sql);
    if (mysqli_num_rows($promo_sql) != 0) {
        $sql_3="SELECT status FROM `promo_code`  WHERE  `code` =  '$promo'";
        $status_sql = mysqli_query($connect, $sql_3);
        $arr = mysqli_fetch_assoc($status_sql);
        if ($arr['status']==='enable'){
            $sql_4="SELECT sale FROM `promo_code`  WHERE  `code` =  '$promo'";
            $sale_sql = mysqli_query($connect, $sql_4);
            $sale = mysqli_fetch_assoc($sale_sql);
            $sql_5="SELECT `price` FROM `product` WHERE  `product_name` =  '$cardName'";
            $price_sql = mysqli_query($connect, $sql_5);
            $price = mysqli_fetch_assoc($price_sql);
            $sale_1 = (($cardCount * $price['price'])/100)*$sale['sale'];
            $sum = ($cardCount * $price['price'])-$sale_1;
            $response['sum'] = $sum;


        }else{
            $sum = getSum($cardName,$cardCount);
            $response['sum'] = $sum;
            $response['message'] ="Promotional code is not valid";
        }
    } else{
        $sum = getSum($cardName,$cardCount);
        $response['sum'] = $sum;
        $response['message'] ="Promo code is not correct";

    }
}else {
    $sum = getSum($cardName,$cardCount);
    $response['sum'] = $sum;


}
echo  json_encode($response);
exit();