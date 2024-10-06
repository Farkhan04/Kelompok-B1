<?php
// Mengimpor file yang diperlukan
require_once 'Lingkaran.php';       // Mengimpor file yang berisi kelas Lingkaran
require_once 'PersegiPanjang.php'; // Mengimpor file yang berisi kelas PersegiPanjang

try {
    // Membuat objek $tanahAgus dari kelas Lingkaran dengan jari-jari 3
    $tanahAgus = new Lingkaran(3);

    // Membuat objek $tanahChandra dari kelas PersegiPanjang dengan panjang 3 dan lebar 4
    $tanahChandra = new PersegiPanjang(3, 4);

    // Menampilkan informasi luas tanah Agus dan jenis tanaman yang ditanam di sana
    echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 \n";
    echo $tanahAgus->ditanami() . "\n\n";

    // Menampilkan informasi luas tanah Chandra dan jenis tanaman yang ditanam di sana
    echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " m2 \n";
    echo $tanahChandra->ditanami() . "\n";
} catch (Exception $e) {
    // Menangani exception jika terjadi kesalahan saat membuat objek
    echo 'Error: ' . $e->getMessage();
}
