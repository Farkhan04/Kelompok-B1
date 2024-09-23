<?php
// Mendapatkan informasi tanggal sekarang
$dateInfo = getdate();

// Mengambil hari, bulan, dan tahun
$day = $dateInfo['mday'];
$month = $dateInfo['mon'];
$year = $dateInfo['year'];

// Menampilkan tanggal dalam format DD-BB-YYYY
echo sprintf("%02d-%02d-%04d", $day, $month, $year);
?>
