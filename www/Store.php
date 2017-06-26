<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];
$product = $_POST['SelValue'];


$file = fopen($product.'.txt', 'a+');
$test = fwrite($file, $name . " " . $surname . " " . $number . " | " . "\r");
fclose($file);
$result = file ($product. '.txt');


echo json_encode(array('success' => true,
    "StoreInfo" => $product));


?>