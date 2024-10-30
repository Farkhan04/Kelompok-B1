<?php
session_start(); // Memulai sesi
session_destroy(); // Menghancurkan semua data sesi
header("Location: index.php"); // Mengarahkan kembali ke halaman login
exit();
?>
