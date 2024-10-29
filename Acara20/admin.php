<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: dashboard.php");
    exit();
}

echo "<h2>Halaman Admin</h2>";
echo "<p>Selamat datang di halaman admin. Anda memiliki hak akses penuh di sini.</p>";
echo "<a href='dashboard.php'>Kembali ke Dashboard</a>";
?>
