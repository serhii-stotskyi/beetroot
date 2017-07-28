<?php
session_start();
$bdHost = '127.0.0.1';
$bdLogin = 'root';
$bdPass = 'derparol310889';
$bdName = 'shop';

$connect = mysqli_connect($bdHost,$bdLogin,$bdPass,$bdName);
if (!$connect){
    echo mysqli_connect_error();
}
