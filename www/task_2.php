<?php
$Count=0;
for ($num = 1000; $num >= 50; $num/=2) {
    $Count++;
}
echo  $num.'<br>';
echo "1000/50   $Count ones";
echo  '<br>';

$num1 = 1000;
$Count2 =0;
while ($num1>=50){
    $num1/=2;
    $Count2++;
}
echo  $num1.'<br>';
echo "1000/50   $Count2 ones";