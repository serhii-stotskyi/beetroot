<?php
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$email = $_POST['email'];
$oder = ['product'=>$product,'quantity'=>$quantity,'address'=>$address];
$serOder =serialize($oder);
//$fileOpen = fopen($product.".txt","a+");
//$fileWrite = file_put_contents($product.'.txt','Card - '.$product.' Quantity '.$quantity.' Address '.$address.' Email '.$email);
$fileWrite = file_put_contents($product.'.txt',$serOder);
$result = file_get_contents($product.".txt");
//$unResult = unserialize($result);
echo json_encode(['success'=>true,'result'=>unserialize($result)]);
exit();
/*$product = $_POST['product'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$email = $_POST['email'];
$oder = ['product'=>$product,'quantity'=>$quantity,'address'=>$address,'email'=>$email];
$serOder =serialize($oder);
//$fileOpen = fopen($product.".txt","a+");
$fileWrite = file_put_contents($product.".txt",$serOder);
$result = file_get_contents($product.".txt");*/

//var_dump(unserialize($result));
/*
echo json_encode(['success'=>true,'result'=>unserialize($result)]);
exit();*/
?>