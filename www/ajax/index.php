<?php
$name = $_POST['name'];
$soname = $_POST['soName'];
$email = $_POST['email'];
$password = $_POST['password'];


$file = fopen('file.txt', 'a+');
$test = fwrite($file, $email . " ".$password.".");
fclose($file);
$result=file('file.txt');

echo json_encode(array('success' => true,
                        'userInfo'=>$result));
//
//echo $name;
//echo $soname;
//echo $email;
//echo $password;
exit();
?>
