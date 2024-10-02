<?php
require_once 'MobilBMW.php'; // Mengimpor kelas MobilBMW

class MobilBMWberaksi {
    // Method untuk menjalankan semua aksi dari kelas MobilBMW
    public function nontonTv() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->nontonTV();
    }

    public function hidupkanMobil() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->hidupkanMobil();
    }

    public function matikanMobil() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->matikanMobil();
    }

    public function ubahGigi() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->ubahGigi();
    }
}
?>