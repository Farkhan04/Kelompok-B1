<?php
require_once 'ItemProduk.php';
class Celana extends ItemProduk {
    private $tipe;
    private $model;

    // Constructor untuk inisialisasi properti
    public function __construct($nama, $ukuran, $warna, $tipe, $model) {
        $this->setNama($nama);
        $this->setUkuran($ukuran);
        $this->setWarna($warna);
        $this->tipe = $tipe;
        $this->model = $model;
    }

    // Method untuk mendapatkan tipe celana
    public function getTipe() {
        return $this->tipe;
    }

    // Method untuk mendapatkan model celana
    public function getModel() {
        return $this->model;
    }

    // Method untuk menampilkan informasi celana
    public function infoProduk() {
        return "Nama Celana: " . $this->getNama() . 
               ", Ukuran: " . $this->getUkuran() . 
               ", Warna: " . $this->getWarna() . 
               ", Tipe: " . $this->getTipe() . 
               ", Model: " . $this->getModel();
    }
}
?>