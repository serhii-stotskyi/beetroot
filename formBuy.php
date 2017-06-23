<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 22.06.2017
 * Time: 09:30
 */

    //$newBuy = $_POST['newBuy'];
    //$oldBuy = $_POST['oldBuy'];
    $nameLastName = $_POST['nameLastName'];
    $town = $_POST['town'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

$order = ["nameLastName" => $nameLastName,
            "town" => $town,
            "tel" => $tel,
            "email" => $email];

$fileOpen = fopen($order.".txt","a+");
$fileWrite = fwrite($fileOpen, $email, $nameLastName);
$castomer = file($order.".txt");


echo json_encode(['success'=> true,
                     'order'=>$order]);
exit();


