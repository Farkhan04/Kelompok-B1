<?php
// Definisikan sebuah interface untuk menghitung luas berbagai bentuk geometris
interface HitungLuas {
    // Method untuk menghitung luas persegi
    public function hitungLuasPersegi($sisi);

    // Method untuk menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi);

    // Method untuk menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari);
}
?>
