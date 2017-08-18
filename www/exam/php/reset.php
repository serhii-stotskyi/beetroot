<?php
include 'connection.php';

$getReset = mysqli_query($connect,'UPDATE  `exam`.`sitys` SET  `status` =  1 WHERE  `sitys`.`status` = 0');
$response['message'] = "Reset";
session_destroy();
echo json_encode($response);