<?php
session_start();
$bdHost = 'localhost';
$bdLogin = 'root';
$bdPass = 'Sergey13';
$bdName = 'shop';

$connect = mysqli_connect($bdHost,$bdLogin,$bdPass,$bdName);
if (!$connect){
    echo mysqli_connect_error();
    die; // вопрос?
}
