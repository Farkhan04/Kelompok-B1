<?php

$dateInfo = getdate();

$day = $dateInfo['mday'];
$month = $dateInfo['mon'];
$year = $dateInfo['year'];

echo sprintf("%02d-%s-%04d", $day, $month, $year);
?>
