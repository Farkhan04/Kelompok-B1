<?php
require('../BackEnd/koneksi.php');

if (isset($_POST['Username']) && isset($_POST['password'])) {
    $userName = $_POST['Username'];
    $userPass = md5($_POST['password']); // Enkripsi password

    // Memeriksa apakah username dan password cocok
    $query = "SELECT * FROM user WHERE Username='$userName' AND Password='$userPass'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Login berhasil!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Username atau password salah.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap.']);
}
?>
