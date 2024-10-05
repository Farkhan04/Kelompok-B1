<?php
require_once 'HitungLuas.php'; // Mengimpor interface HitungLuas

// Definisikan class Persegi yang mengimplementasikan interface HitungLuas
class Persegi implements HitungLuas {
    // Method hitungLuasPersegi untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi; // Formula untuk luas persegi (sisi^2)
    }

    // Method hitungLuasSegitiga, tapi tidak diimplementasikan untuk Persegi
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0;
    }

    // Method hitungLuasLingkaran, tapi tidak diimplementasikan untuk Persegi
    public function hitungLuasLingkaran($jariJari) {
        return 0;
    }
}
?>
