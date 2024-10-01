<?php

$dateInfo = getdate();


$day = $dateInfo['mday'];
$month = $dateInfo['mon'];
$year = $dateInfo['year'];


echo sprintf("%02d-%02d-%04d", $day, $month, $year);
?>
