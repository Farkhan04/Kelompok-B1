<?php
$koneksi = mysqli_connect("localhost", "root", "", "acara21");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
