<?php

$current_date = new DateTime('now');
$entered_date = new DateTime($_POST['date']);

$interval = $current_date -> diff($entered_date);

echo $interval -> format("%y years %m months %d days");
?>