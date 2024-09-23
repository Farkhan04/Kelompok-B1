<?php

// Kelas MobilLengkap
class MobilLengkap {
    // Metode untuk menonton TV
    public function nontonTV() {
        echo "TV dihidupkan.<br>";
        echo "TV mencari channel.<br>";
        echo "TV menampilkan gambar.<br>";
    }
    
    // Metode lain yang mungkin ada di kelas MobilLengkap
    public function hidupkanMobil() {
        echo "Mobil dihidupkan.<br>";
    }

    public function matikanMobil() {
        echo "Mobil dimatikan.<br>";
    }

    public function ubahGigi($gigi) {
        echo "Gigi diubah ke: $gigi.<br>";
    }
}


// Kelas MobilBMW yang mewarisi dari MobilLengkap
class MobilBMW extends MobilLengkap {
    // Kelas ini mewarisi semua metode dari MobilLengkap
    // Namun kita bisa menambahkan atau mengubah metode jika diperlukan
}


// Kelas MobilBMWberaksi
class MobilBMWberaksi {
    private $mobilBMW;

    public function __construct() {
        $this->mobilBMW = new MobilBMW();
    }

    public function nontonTv() {
        $this->mobilBMW->nontonTV();
    }

    public function hidupkanMobil() {
        $this->mobilBMW->hidupkanMobil();
    }

    public function matikanMobil() {
        $this->mobilBMW->matikanMobil();
    }

    public function ubahGigi($gigi) {
        $this->mobilBMW->ubahGigi($gigi);
    }
}

// Contoh penggunaan
$aksi = new MobilBMWberaksi();
$aksi->nontonTv();
$aksi->hidupkanMobil();
$aksi->ubahGigi(3);
$aksi->matikanMobil();
?>
