<?php
include 'connection.php';
include 'function.php';
$city = $_POST ['city'];
$response = [];
if (isset($_SESSION['usedCity'])) {
    if (strtolower($city[0]) === $_SESSION['letter']) {
        $used = $_SESSION['usedCity'];
        foreach ($used as $value) {
            if ($value === $city) {
                $response['error'] = 'The city is used';
                break;
            }
        }
        if (isset($response['error'])) {
            $response['success'] = false;
            $response['message'] = 'The city is used';
        } else {
            $cityResult = getCityName($city);
            if (isset($cityResult)) {
                $response['success'] = true;
                $response['firstCity'] = $city;
                $response['secondCity'] = $cityResult;
                $_SESSION['usedCity'] = [$cityResult,$city];
                $_SESSION['letter'] = getLastLatter($cityResult);
            } else {
            $response['success'] = false;
            $response['message'] = 'you win';
        }
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'You must enter a city ending with a letter: ' . $_SESSION['letter'];
    }
} else {
    $cityResult = getCityName($city);
    if (isset($cityResult)) {
        $response['success'] = true;
        $response['firstCity'] = $city;
        $response['secondCity'] = $cityResult;
        $_SESSION['usedCity'] = [$cityResult,$city];
        $_SESSION['letter'] = getLastLatter($cityResult);

    } else {
        $response['success'] = false;
        $response['message'] = 'you win';
    }

}


echo json_encode($response);