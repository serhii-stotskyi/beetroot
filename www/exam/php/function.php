<?php

/**
 * Search city in BD when first letter is last letter in entered city
 * @param $city
 * @return mixed
 */
function getCityName($city)
{
    global $connect;

    $letter = getLastLatter($city);

    $getCityName = mysqli_query($connect, 'SELECT `name` FROM  `sitys` WHERE  `status` = 1');

    while ($row = mysqli_fetch_assoc($getCityName)) {
        $cityArr[] = $row["name"];
    }

    foreach ($cityArr as $value) {
        $letter2 = strtolower($value[0]);

        if ($letter2 === $letter) {
            $result = $value;
            if ($result === $city) {
                continue;
            } else {
                mysqli_query($connect, "UPDATE  `exam`.`sitys` SET  `status` =  '0' WHERE  `sitys`.`name` = '$result' ");
                break;

            }
        }
    }

    return $result;

}

/**
 * get last letter in entered city
 * @param $city
 * @return mixed
 */
function getLastLatter($city)
{
    $letterCount = strlen(trim($city));

    if ($city[$letterCount - 1] === 'w') {
        $letter = $city[$letterCount - 2];
    } else {
        $letter = $city[$letterCount - 1];
    }
    return $letter;

}



