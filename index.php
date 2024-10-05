<?php
// Mengimpor file Persegi.php, Segitiga.php, dan Lingkaran.php
require_once 'Persegi.php';
require_once 'Segitiga.php';
require_once 'Lingkaran.php';

// Membuat object dari masing-masing class
$persegi = new Persegi();
$segitiga = new Segitiga();
$lingkaran = new Lingkaran();

// Menghitung dan menampilkan luas masing-masing bangun datar
echo "Luas Persegi dengan sisi 4: " . $persegi->hitungLuasPersegi(4) . "<br>";
echo "Luas Segitiga dengan alas 4 dan tinggi 5: " . $segitiga->hitungLuasSegitiga(4, 5) . "<br>";
echo "Luas Lingkaran dengan jari-jari 7: " . $lingkaran->hitungLuasLingkaran(7) . "<br>";
?>
