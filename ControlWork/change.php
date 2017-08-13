<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 13.08.2017
 * Time: 10:51
 */
header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('Europe/Kiev');

$delta = getDelta(mktime(date('H'), date('i'), 0, date('n'), date('j'),date('Y')), strtotime($_POST['date']));

function getDelta($first, $last)
{
    if ($last < $first) return false;

    // Solve H:M:S part.
    $hms = ($last - $first) % (3600 * 24);
    $delta['seconds'] = $hms % 60;
    $delta['minutes'] = floor($hms/60) % 60;
    $delta['hours']   = floor($hms/3600) % 60;

    // Now work only with date, delta time = 0.
    $last -= $hms;
    $f = getdate($first);
    $l = getdate($last); // the same daytime as $first!

    $dYear = $dMon = $dDay = 0;

    // Delta day. Is negative, month overlapping.
    $dDay += $l['mday'] - $f['mday'];
    if ($dDay < 0) {
        $monlen = monthLength(date("Y", $first), date("m", $first));
        $dDay += $monlen;
        $dMon--;
    }
    $delta['mday'] = $dDay;

    // Delta month. If negative, year overlapping.
    $dMon += $l['mon'] - $f['mon'];
    if ($dMon < 0) {
        $dMon += 12;
        $dYear --;
    }
    $delta['mon'] = $dMon;

    // Delta year.
    $dYear += $l['year'] - $f['year'];
    $delta['year'] = $dYear;

    return $delta;
}


function monthLength($year, $mon)
{
    $l = 28;
    while (checkdate($mon, $l+1, $year)) $l++;
    return $l;
}

echo 'До выбранной вами даты осталось: '.$delta['year'].' лет, '.$delta['mon'].' месяцев, '.$delta['mday'].' дней, '.$delta['hours'].' часов';

