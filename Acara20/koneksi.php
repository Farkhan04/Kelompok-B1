<?php
$koneksi = mysqli_connect("localhost", "root", "", "acara20");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
