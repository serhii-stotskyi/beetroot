<?php
/**
 * create file name
 * @param $userName
 * @return string
 */
function getFileName($userName){
    return $userName.'.txt';
}

/**
 * checking file
 * @param $file
 * @return bool
 */
function fileExist($file){
    return file_exists($file);
}

/**get avatar name from file
 * @param $fileName
 * @return string
 */
function getAvatarFromFile($fileName){
    $string= file_get_contents($fileName);
    return strstr($string,'User',true);

}

/**
 * get user info from file
 * @param $fileName
 * @return string
 */
function getUserInfoFromFile($fileName){
    $string= file_get_contents($fileName);
    return strstr($string,'User');
}

/**
 * check length avatar name
 * @param $avatar
 * @return string
 */
function checkAvatar($avatar){
    if (strlen($avatar)==0){
        $result= 'noavatar.jpg';
    }else{
        $result= $avatar;}
    return $result;
}

/**
 * check length user info
 * @param $avatar
 * @return string
 */
function checkUserInfo($avatar){
    if (strlen($avatar)==4){
        $result= "No user information";
    }else{
        $result= $avatar;}
    return $result;
}

$success=[];
$success['fileName'] =getFileName($_POST['userName']);
$success['fileExist'] =fileExist($success['fileName']);
if ($success['fileExist']){
    $avatar1 = getAvatarFromFile($success['fileName'] );
    $info1 = getUserInfoFromFile($success['fileName']);
    $success['avatar']= checkAvatar($avatar1);
    $success['userInfo']= checkUserInfo($info1);
}else {  $success['avatar'] = 'noavatar.jpg';
    $success['userInfo'] ="no such user $_POST[userName]";
}

echo json_encode($success);
exit();



