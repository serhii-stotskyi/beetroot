<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 19.06.2017
 * Time: 12:10
 */
$login = $_POST['login'];
$email = $_POST['email'];
$home = $_POST['home'];
$password = $_POST['password'];

$users["users"] = array(
    "login" => "$login",
    "email" => "$email",
    "home" => "$home",
    "password" => "$password"
);

$handle = fopen("user_info.txt", "a+");
echo nl2br(file_get_contents('user_info.txt'));
fwrite($handle, serialize($users)); //Преобразуем массив в строку, и записываем в файл
//print_r($users);
echo "<br>";
fclose($handle); //Закрываем файл


//После сериализации, наш массив будет выглядеть вот так:
//a:3:{i:1;s:6:"ox2.ru";i:2;s:25:"заказать интернет-магазин";i:3;s:8:"троло-ло";}

$handle = fopen("user_info.txt", "a+");
//Читаем из файла текст, и преобразовываем обратно в массив
$users = unserialize(fread($handle, filesize("user_info.txt")));
echo nl2br(file_get_contents('user_info.txt'));
fclose($handle); //Закрываем файл
echo "<br>";
print_r($users); //Выводим массив
echo "<br>";
echo "<br>";

echo("Это последние введенные данные<br>");
echo("Подождите немного ваши данные отправляються на сервер");

echo "<br>";
echo $login;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $password;
?>