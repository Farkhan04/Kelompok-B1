<?php
// Mengimpor file yang diperlukan
require_once 'Tanah.php';  // Mengimpor file yang berisi interface Tanah
require_once 'Bibit.php';  // Mengimpor file yang berisi abstract class Bibit

// Mendefinisikan kelas PersegiPanjang yang mengimplementasikan interface Tanah dan extends dari Bibit
class PersegiPanjang extends Bibit implements Tanah {
    private $panjang; // Properti untuk menyimpan nilai panjang persegi panjang
    private $lebar;   // Properti untuk menyimpan nilai lebar persegi panjang

    // Konstruktor untuk inisialisasi objek PersegiPanjang dengan panjang dan lebar yang diberikan
    public function __construct($panjang, $lebar) {
        // Memeriksa apakah nilai panjang dan lebar lebih dari 0
        if ($panjang <= 0 || $lebar <= 0) {
            throw new InvalidArgumentException("Panjang dan lebar harus positif.");
        }
        $this->panjang = $panjang; // Menginisialisasi properti panjang dengan nilai panjang yang diberikan
        $this->lebar = $lebar;     // Menginisialisasi properti lebar dengan nilai lebar yang diberikan
    }

    // Method untuk menghitung luas persegi panjang
    public function hitungLuas() {
        return round($this->panjang * $this->lebar, 2); // Menghitung luas persegi panjang dengan rumus panjang * lebar
    }

    // Method untuk menentukan jenis tanaman yang ditanam di tanah ini
    public function ditanami() {
        return "ditanami Padi"; // Mengembalikan string "ditanami Padi" sebagai jenis tanaman yang ditanam
    }
}
