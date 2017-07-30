<?php
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
echo "$email";
echo '<br>';
echo $login;
echo '<br>';
echo $password;
$user = ["email"=>$email,
    "login"=>$login,
    "password"=>$password];

$file = fopen($login.".txt", "a+");
$test = fwrite($file, $user);
//fclose($file);
$result = file($login.".txt");



echo json_encode(['success'=> true,
    'userInfo'=> unserialize($result)]);
exit ();
?>