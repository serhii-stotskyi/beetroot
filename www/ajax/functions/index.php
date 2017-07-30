<?php
//************************************************************************************************************************
$name = $_POST['name'];
$soname = $_POST['soName'];
$email = $_POST['email'];
$password = $_POST['password'];
/**
 * get the values from input
 * @param $name
 * @param $soname
 * @param $email
 * @param $password
 * @return string
 */
function getValueFromForm($name, $soname, $email, $password)
{
    return ($name . ' ' . $soname . ' ' . $email . ' ' . $password);
}

/**
 * @param $file
 * @param $test
 * @return int
 */
function writeFile($file, $test)
{
    $wrFile = fwrite($file, $test);
    return $wrFile;
}

;

$file = fopen($name . '.txt', 'a+');
$test = getValueFromForm($name, $soname, $email, $password);

writeFile($file, $test);
//*****************************************************************************************************************************************
//echo $test;

//file();
//fclose($file);
//$result=file('file.txt');
//
//echo json_encode(array('success' => true,
//                        'userInfo'=>$result));
//
//echo $name;
//echo $soname;
//echo $email;
//echo $password;
//exit();
//*****************************************************************************************************************************************

function getSum($firstValue,$secondValue){
return $_POST['qwerty']+$secondValue;

}
function getDiv($result, $firstValue){
    return $result/$firstValue;
}
$test1=2;
$test2=3;
function getSum2(){
    global $test1, $test2;
    echo($test1+$test2);
}
 getSum2();
$result=getSum($_POST['qwerty1'],10);


?>
