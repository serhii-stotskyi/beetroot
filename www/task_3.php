<?php
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$ru =[];
$en=[];
foreach ($arr as $Color_key=>$color){
    array_push($en,$Color_key);
    array_push($ru,$color);
}
print_r ($en);
echo '<br>';
print_r($ru);