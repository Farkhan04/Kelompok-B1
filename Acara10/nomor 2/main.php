<?php
// Include semua kelas
require_once 'Topi.php';
require_once 'Celana.php';
require_once 'Baju.php';

// Membuat objek dari setiap class

$topi = new Topi("Topi Baseball", "M", "Hitam", "Sporty");
echo $topi->infoProduk();
echo "<hr>";

$celana = new Celana("Celana Jeans", "32", "Biru", "Panjang", "Skinny");
echo $celana->infoProduk();
echo "<hr>";

$baju = new Baju("Baju Kaos", "L", "Putih", "Casual");
echo $baju->infoProduk();
?>