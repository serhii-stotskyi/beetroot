<?php
//
$target = mktime(0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year']);
$today = time();

$difference = ($target - $today);
$years = (int)($difference / (31536000));
$months = (int)(($difference % 31536000) / (2592000));
$days = (int)(($difference % (31536000) % 2592000) / 86400);
$hours = ( int)((($difference % (31536000)) % 86400) / 3600);
$minutes = ( int)((((($difference % (31536000)) % 86400)) % 3600) / 60);

echo json_encode(array('success' => true,
    'years'=>$years,
    'months'=>$months,
    'days'=>$days,
    'hours'=>$hours,
    'minutes'=>$minutes));

?>

