<?php

//$test="Hello world lorem dsfsd cxvcxf world ede";
//$test1 = substr($test, 6, 2);
//$test2 = strpos($test,'world');
//$test3 = strstr($test,'world', true);
//$test4 = strrchr($test,'w');
//echo ($test4);


//*****************
//function test($firstParameter){
//    echo($firstParameter);
//}
//test('Max');
//***************

function test($firstValue, $secondValue=3){
    return $firstValue*$secondValue;
};
$returnValue=test(5);
echo ($returnValue);

//*************



?>