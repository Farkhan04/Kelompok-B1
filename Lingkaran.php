<?php
// Mengimpor file yang diperlukan
require_once 'Tanah.php';  // Mengimpor file yang berisi interface Tanah
require_once 'Bibit.php';  // Mengimpor file yang berisi abstract class Bibit

// Mendefinisikan kelas Lingkaran yang mengimplementasikan interface Tanah dan extends dari Bibit
class Lingkaran extends Bibit implements Tanah {
    private $jariJari; // Properti untuk menyimpan nilai jari-jari lingkaran

    // Konstruktor untuk inisialisasi objek Lingkaran dengan jari-jari yang diberikan
    public function __construct($jariJari) {
        // Memeriksa apakah nilai jari-jari lebih dari 0
        if ($jariJari <= 0) {
            throw new InvalidArgumentException("Jari-jari harus positif.");
        }
        $this->jariJari = $jariJari; // Menginisialisasi properti jariJari dengan nilai jari-jari yang diberikan
    }

    // Method untuk menghitung luas lingkaran
    public function hitungLuas() {
        return round(M_PI * pow($this->jariJari, 2), 2); // Menghitung luas lingkaran dengan rumus pi * r^2
    }

    // Method untuk menentukan jenis tanaman yang ditanam di tanah ini
    public function ditanami() {
        return "ditanami Kopi"; // Mengembalikan string "ditanami Kopi" sebagai jenis tanaman yang ditanam
    }
}
