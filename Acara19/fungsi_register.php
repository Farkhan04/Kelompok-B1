<?php
require('koneksi.php');
if (isset($_POST['register'])) {
    $userName = $_POST['txt_username'];
    $userPass = $_POST['txt_pass'];

    $userName = strtolower(stripslashes($userName));
    $userPass = md5($userPass);
    // $userPass = password_hash($userPass, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin (username, password, level) VALUES ('$userName', '$userPass', 'user')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        // Jika berhasil, arahkan ke halaman login
        header('Location: index.php');
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
