<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login Dengan PHP dan MySQLi Menggunakan MD5 - WWW.JTI.COM</title>
</head>
<body>
    <h2>Halaman Admin</h2>
    <br/>

    <!-- Cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Anda telah login.</h4>
    <br/>
    <br/>
    <a href="logout.php">LOGOUT</a>
</body>
</html>
