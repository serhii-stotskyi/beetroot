<?php
include 'connection.php';

if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['rePassword']) && !empty($_POST['email']) && !empty($_POST['country']) && !empty($_POST['city'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $rePassword = $_POST['rePassword'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $response = [];

    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($connect,$sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows === 0) {
        $sql_1 = "INSERT INTO `users` ( `username`, `email`, `pass`, `country`, `city`) 
                VALUES ('$username', '$email', '$password', '$country', '$city');";
        $result_1 = mysqli_query($connect,$sql_1);
        if ($result_1) {
            $response['success']= true;
            $response['message'] = "Account Successfully Created";
        } else {
            $response['success']= false;
            $response['message'] = "Account not created!";
        }
    }
} else {
    $response['success']= false;
    $response['message'] = "All fields are required!";
}
echo json_encode($response);
exit();
