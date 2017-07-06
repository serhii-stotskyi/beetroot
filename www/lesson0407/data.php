<?php
//    while ($row = $result->fetch_assoc()) {
//        $res = [$row['email']];
//      // var_dump($res);
//       //var_dump($email);
//        if(in_array($email, $res)){
//            echo "Такой пользователь есть";
//            break;
//        }
//        else {
//            echo("Такого пользовтеля не существует");
//            break;
//        }
//    }
$email = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
$servername = "localhost";
$username = "root";
$password = "nokiac6-01";
$dbname = "testDB";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT email FROM users WHERE email = '$email' AND password = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $sql2 = "UPDATE users SET password='$pass2' WHERE password='$pass'";
    if ($conn->query($sql2)== TRUE){
        echo "Обновление пароля успешно";
    }
}
else {
    echo "Неверное имя пользователя и\или пароль";
}
$conn ->close();
?>