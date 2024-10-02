<?php
require_once 'MobilBMWberaksi.php'; // Mengimpor kelas MobilBMWberaksi

// Membuat objek dari kelas MobilBMWberaksi
$aksiBMW = new MobilBMWberaksi();

// Menjalankan metode-metode yang ada
echo "<h3>Aksi Hidupkan Mobil</h3>";
$aksiBMW->hidupkanMobil();

echo "<h3>Aksi Nonton TV di Mobil</h3>";
$aksiBMW->nontonTv();

echo "<h3>Aksi Ubah Gigi</h3>";
$aksiBMW->ubahGigi();

echo "<h3>Aksi Matikan Mobil</h3>";
$aksiBMW->matikanMobil();
?>
