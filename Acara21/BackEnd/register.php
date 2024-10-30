<?php
require('../BackEnd/koneksi.php');

if (isset($_POST['txt_username']) && isset($_POST['txt_pass'])) {
    $userName = $_POST['txt_username'];
    $userPass = $_POST['txt_pass'];

    // Sanitasi input
    $userName = strtolower(stripslashes($userName));
    $userPass = md5($userPass); // Enkripsi password

    // Memeriksa apakah username sudah ada
    $checkQuery = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$userName'");

    if (mysqli_num_rows($checkQuery) > 0) {
        // Jika username sudah ada, tampilkan pesan error
        echo json_encode(['status' => 'error', 'message' => 'Username sudah tersedia.']);
    } else {
        $query = "INSERT INTO user (Username, Password, Role) VALUES ('$userName', '$userPass', 'user')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Jika berhasil, kirimkan pesan sukses
            echo json_encode(['status' => 'success', 'message' => 'Registrasi berhasil! Silakan login.']);
        } else {
            // Jika gagal, tampilkan pesan error
            echo json_encode(['status' => 'error', 'message' => 'Error: ' . mysqli_error($koneksi)]);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap.']);
}
?>
