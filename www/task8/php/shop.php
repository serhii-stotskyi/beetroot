<?php
include 'connection.php';
$response = [];
if(isset($_SESSION['id'])){
    $response['name'] = $_SESSION['username'];
    $response['success'] = true;
    $result = mysqli_query($connect, "SELECT * FROM category");
    while ($row = mysqli_fetch_assoc($result)){
        $response['categoryName'][] = $row;
    }

}else{
    $response['success'] = false;
}

echo json_encode($response);
exit();