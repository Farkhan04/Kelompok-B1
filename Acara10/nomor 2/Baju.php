<?php
require_once 'ItemProduk.php';
class Baju extends ItemProduk {
    private $tipe;

    // Constructor untuk inisialisasi properti
    public function __construct($nama, $ukuran, $warna, $tipe) {
        $this->setNama($nama);
        $this->setUkuran($ukuran);
        $this->setWarna($warna);
        $this->tipe = $tipe;
    }

    // Method untuk mendapatkan tipe baju
    public function getTipe() {
        return $this->tipe;
    }

    // Method untuk menampilkan informasi baju
    public function infoProduk() {
        return "Nama Baju: " . $this->getNama() . 
               ", Ukuran: " . $this->getUkuran() . 
               ", Warna: " . $this->getWarna() . 
               ", Tipe: " . $this->getTipe();
    }
}
?>