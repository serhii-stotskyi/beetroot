<?php
session_start();
$bdHost = '127.0.0.1';
$bdLogin = 'root';
$bdPass = 'qaz123';
$bdName = 'exam';

$connect = mysqli_connect($bdHost,$bdLogin,$bdPass,$bdName);
if (!$connect){
    echo mysqli_connect_error();
}