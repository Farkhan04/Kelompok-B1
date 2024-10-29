<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $data['role']; // Menyimpan peran pengguna dalam sesi

    // Redirect berdasarkan hak akses
    header("Location: dashboard.php");
} else {
    header("Location: index.php?pesan=gagal");
}
?>
