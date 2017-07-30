<?php
include 'connection.php';
$response = [];
if(isset($_SESSION['id'])){
    $response['name'] = $_SESSION['username'];
    $response['success'] = true;
}else{
    $response['success'] = false;
}
echo json_encode($response);
exit();