<?php
require('koneksi.php');

if (isset($_POST['register'])) {
    $userName = $_POST['txt_username'];
    $userPass = $_POST['txt_pass'];

    $userName = strtolower(stripslashes($userName));
    $userPass = md5($userPass);

    // Memeriksa apakah username sudah ada
    $checkQuery = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$userName'");

    if (mysqli_num_rows($checkQuery) > 0) {
        // Jika username sudah ada, tampilkan pesan error
        $error_message = "Username Sudah Tersedia";
    } else {
        $query = "INSERT INTO users (username, password, role) VALUES ('$userName', '$userPass', 'editor')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Jika berhasil, arahkan ke halaman login
            header('Location: index.php');
            exit;
        } else {
            // Jika gagal, tampilkan pesan error
            $error_message = "Error: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Daftar</h2>

    <!-- cek pesan notifikasi -->
    <?php
    if (isset($error_message)) {
        echo $error_message;
    }
    ?>

    <form action="" method="POST"> <!-- Form mengarah ke halaman yang sama -->
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_username" required></p>
        <p>password: <input type="password" name="txt_pass" required></p>
        <button type="submit" name="register">Register</button>
    </form>
    <p><a href="index.php">Login</a></p>
</body>
</html>
