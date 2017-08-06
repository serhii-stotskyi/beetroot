<?php

include 'connection.php';
$categoryId = $_POST['categoryId'];
if ($categoryId) {
    $result = mysqli_query($connect, "SELECT product_name,available FROM product WHERE category_id = '$categoryId'");
    while ($row = mysqli_fetch_assoc($result)) {
        $response['productName'][] = $row;
    }
    $response['success'] = true;
} else {
    $response['success'] = false;
}
echo json_encode($response);