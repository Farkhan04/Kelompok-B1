<?php
include 'koneksi.php';

$limit = 10 * 1024 * 1024; // Batas ukuran file (10MB)
$ekstensi = array('png', 'jpg', 'jpeg', 'gif'); // Ekstensi file yang diizinkan

$jumlahFile = count($_FILES['foto']['name']);

for ($x = 0; $x < $jumlahFile; $x++) {
    $namaFile = $_FILES['foto']['name'][$x];
    $tmp = $_FILES['foto']['tmp_name'][$x];
    $tipeFile = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['foto']['size'][$x];

    // Cek apakah ukuran file melebihi batas
    if ($ukuran > $limit) {
        header("Location: index.php?alert=gagal_ukuran");
        exit(); // Hentikan eksekusi setelah redirect
    }

    // Cek apakah ekstensi file diizinkan
    if (!in_array(strtolower($tipeFile), $ekstensi)) {
        header("Location: index.php?alert=gagal_ekstensi");
        exit(); // Hentikan eksekusi setelah redirect
    }

    // Pindahkan file yang diupload ke folder tujuan
    $namaBaru = date('d-m-Y') . '-' . $namaFile;
    if (move_uploaded_file($tmp, 'file/' . $namaBaru)) {
        // Masukkan informasi file ke dalam database
        $query = "INSERT INTO gambar (gambar_id, gambar_nama) VALUES (NULL, '$namaBaru')";
        mysqli_query($koneksi, $query);
    } else {
        header("Location: index.php?alert=gagal_upload");
        exit(); // Hentikan eksekusi setelah redirect
    }
}

// Redirect setelah semua file diproses
header("Location: index.php?alert=simpan");
?>
