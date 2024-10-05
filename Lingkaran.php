<?php
require_once 'HitungLuas.php'; // Mengimpor interface HitungLuas

// Definisikan class Lingkaran yang mengimplementasikan interface HitungLuas
class Lingkaran implements HitungLuas {
    // Method hitungLuasPersegi, tapi tidak diimplementasikan untuk Lingkaran
    public function hitungLuasPersegi($sisi) {
        return 0;
    }

    // Method hitungLuasSegitiga, tapi tidak diimplementasikan untuk Lingkaran
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0;
    }

    // Method hitungLuasLingkaran untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari) {
        return pi() * $jariJari * $jariJari; // Formula untuk luas lingkaran (π * r^2)
    }
}
?>
