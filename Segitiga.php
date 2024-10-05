<?php
require_once 'HitungLuas.php'; // Mengimpor interface HitungLuas

// Definisikan class Segitiga yang mengimplementasikan interface HitungLuas
class Segitiga implements HitungLuas {
    // Method hitungLuasPersegi, tapi tidak diimplementasikan untuk Segitiga
    public function hitungLuasPersegi($sisi) {
        return 0;
    }

    // Method hitungLuasSegitiga untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi) {
        return ($alas * $tinggi) / 2; // Formula untuk luas segitiga (1/2 * alas * tinggi)
    }

    // Method hitungLuasLingkaran, tapi tidak diimplementasikan untuk Segitiga
    public function hitungLuasLingkaran($jariJari) {
        return 0;
    }
}
?>
