<?php
$currentData = new DateTime(date('o-m-d'));
$SetData = new DateTime($_POST['data']);
$interval = $currentData->diff($SetData)->format('%d days %m months %y years');
echo json_encode ($interval);