<?php
session_start();
include 'connection.php';
$response = [];
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM  users WHERE  username = '$username' AND  pass = '$password'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $response['success'] = true;

    } else {
        $response['message'] = "Invalid username or password!";
    }
} else {
    $response['message'] = "All fields are required!";
}

echo json_encode($response);
//exit();