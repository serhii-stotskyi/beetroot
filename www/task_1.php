<?php
for ($i = 999; $i < 1000000; $i++) {
    $temp = str_pad($i, 6 , "0", STR_PAD_LEFT);
    $result = str_split($temp);
    if ($result[0] + $result[1] + $result[2] == $result[3] + $result[4] + $result[5]) {
        echo $temp . "<br>";
    }
}

